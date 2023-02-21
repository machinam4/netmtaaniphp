<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsScrape;
use App\Models\radios as Radio;
use App\Models\Tvs;
use Exception;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Weidner\Goutte\GoutteFacade;

class NewsController extends Controller
{
    public function index()
    {
        return view('Content.News.home');
    }

    public function articles()
    {
        $latest_news = News::latest()->take(20)->get();
        return view('Content.News.articles', ['latest_news' => $latest_news]);
    }

    public function topics(Request $request)
    {
        // get channel lists 
        $topics = [];
        if ($request->query('channel') && !$request->query('topic')) {
            $topics = NewsScrape::where('channel', $request->query('channel'))->distinct()->get();
        } elseif ($request->query('topic') && $request->query('channel')) {
            $news_channel = NewsScrape::where('channel', $request->query('channel'))->where('topic', $request->query('topic'))->first();
            $news_articles = News::where('news_channel_id', $news_channel->id)->get();
            return view('Content.News.list', ['news_articles' => $news_articles, 'news_channel' => $news_channel]);
        } else {
            $topics = NewsScrape::select('topic')->distinct()->get();
        }
        $latest_news = News::latest()->take(20)->get();
        return view('Content.News.topics', ['topics' => $topics, 'latest_news' => $latest_news]);
    }
    public function channels(Request $request)
    {
        // get channel lists 
        $channels = [];
        if ($request->query('topic') && !$request->query('channel')) {
            $channels = NewsScrape::where('topic', $request->query('topic'))->distinct()->get();
        } elseif ($request->query('topic') && $request->query('channel')) {
            $news_channel = NewsScrape::where('channel', $request->query('channel'))->where('topic', $request->query('topic'))->first();
            $news_articles = News::where('news_channel_id', $news_channel->id)->get();
            return view('Content.News.list', ['news_articles' => $news_articles, 'news_channel' => $news_channel]);
        } else {
            $channels = NewsScrape::distinct('channel')->get();
        }

        $latest_news = News::latest()->take(20)->get();
        return view('Content.News.channels', ['channels' => $channels, 'latest_news' => $latest_news]);
    }
    public function article(News $news)
    {
        $news_article = $news;
        $latest_news = News::latest()->take(20)->get();

        return view('Content.News.article', ['news_article' => $news_article, 'latest_news' => $latest_news]);
    }

    public function list()
    {
        return view('Content.News.list');
    }
    public function categories()
    {
        return view('Content.News.categories');
    }



    // radio news methods
    public function radios()
    {
        $radios = Radio::all();
        return view('Content.News.radios', ['radios' => $radios]);
    }
    public function radio_details(Radio $radio)
    {
        return view('Content.News.radio_details', ['radio' => $radio]);
    }


    // tv news methods
    public function tvs()
    {
        $tvs = Tvs::all();
        return view('Content.News.tvs', ['tvs' => $tvs]);
    }
    public function tv_details(Tvs $tv)
    {
        return view('Content.News.tv_details', ['tv' => $tv]);
    }
    public function tvs_create()
    {
        return view('Content.News.tvs_create');
    }
    public function tvs_save(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('/news/images');
        // $request->thumbnail = $thumbnail;
        Tvs::create([
            'thumbnail' => $thumbnail,
            'country' => $request->country,
            'channel' => $request->channel,
            'url' => $request->url,
        ]);
        return redirect()->route('tvs_create');
    }


    // Admin routes

    // start news articles
    public function admin_scrapes()
    {
        $scrape_list = NewsScrape::all();
        return view('admin.contents.news.articles.scrape_list', ['scrapes' => $scrape_list]);
    }
    public function create()
    {
        return view('admin.contents.news.articles.create');
    }
    public function save(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('/news/images');
        // $request->thumbnail = $thumbnail;
        NewsScrape::firstOrCreate(
            ['url' => $request->url],
            [
                'thumbnail' => $thumbnail,
                'country' => $request->country,
                'topic' => $request->topic,
                'channel' => $request->channel,
                'url' => $request->url,
            ]
        );
        return redirect()->route('admin_scrapes');
    }

    public function editScrape(NewsScrape $scrape) //send the edit view
    {
        return view('admin.contents.news.articles.edit', ['item' => $scrape]);
    }

    public function updateScrape(Request $request, NewsScrape $scrape) //update the item
    {
        $scrape->update($request->all());
        return redirect()->route('admin_scrapes');
    }

    public function deleteScrape(NewsScrape $scrape)
    {
        Storage::delete($scrape->thumbnail);
        News::where('news_channel_id', $scrape->id)->delete();
        $scrape->delete();
        return redirect()->route('admin_scrapes');
    }

    public function doNewsScraping()
    {
        $news_channel = NewsScrape::inRandomOrder()->first();
        // GoutteFacade::header('User-Agent': 'Mozilla/5.0 (Windows NT 10.0; rv:91.0) Gecko/20100101 Firefox/91.0');
        $crawler = GoutteFacade::request('GET', $news_channel->url);

        $crawler->filter('.fP1Qef')->each(function ($node) use ($news_channel) {
            $headline = $node->filter('h3')->text();
            $channel = $node->filter('.UPmit', '.AP7Wnd')->text();
            $description = $node->filter('.s3v9rd', '.AP7Wnd')->text();
            $link = $node->filter('a')->link()->getUri();
            try {

                // $thumbnail = $node->filter('img')->attr('src');
                $thumbnail = $node->filter('img')->attr('src');
                // echo stripslashes($node->filter('.MjjYud')->html());
                // dd($thumbnail);
            } catch (Exception $e) {
                $thumbnail = 'netmtaani';
            }

            News::firstOrCreate(
                ['headline' => $headline],
                [
                    'news_channel_id' => $news_channel->id,
                    'description' => $description,
                    'thumbnail' => $thumbnail,
                    'url' => $link,
                ]
            );
        });
    }
    public function admin_articles()
    {
        $news_list = News::latest()->take(50)->get();
        return view('admin.contents.news.articles.news_list', ['news' => $news_list]);
    }

    // End news articles

    // start Radio news
    public function admin_radios()
    {
        $radios = Radio::all();
        return view('admin.contents.news.radios.list', ['radios' => $radios]);
    }
    public function radio_create()
    {
        return view('admin.contents.news.radios.create');
    }
    public function radio_save(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('/news/images');
        // $request->thumbnail = $thumbnail;
        Radio::create([
            'thumbnail' => $thumbnail,
            'country' => $request->country,
            'channel' => $request->channel,
            'url' => $request->url,
        ]);
        return redirect()->route('admin_radios');
    }
    public function editRadio(Radio $radio) //send the edit view
    {
        return view('admin.contents.news.radios.edit', ['item' => $radio]);
    }
    public function updateRadio(Request $request, Radio $radio) //update the item
    {
        $radio->update($request->all());
        return redirect()->route('admin_radios');
    }

    public function deleteRadio(Radio $radio)
    {
        Storage::delete($radio->thumbnail);

        $radio->delete();
        return redirect()->route('admin_radios');
    }

    // End Radio News

    // Start Tv News
    public function admin_tvs()
    {
        $tvs = Tvs::all();
        return view('admin.contents.news.tvs.list', ['tvs' => $tvs]);
    }
    public function tv_create()
    {
        return view('admin.contents.news.tvs.create');
    }
    public function tv_save(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('/news/images');
        // $request->thumbnail = $thumbnail;
        Tvs::create([
            'thumbnail' => $thumbnail,
            'country' => $request->country,
            'channel' => $request->channel,
            'url' => $request->url,
        ]);
        return redirect()->route('admin_tvs');
    }
    public function editTv(Tvs $tv) //send the edit view
    {
        return view('admin.contents.news.tvs.edit', ['item' => $tv]);
    }
    public function updateTv(Request $request, Tvs $tv) //update the item
    {
        $tv->update($request->all());
        return redirect()->route('admin_tvs');
    }

    public function deleteTv(Tvs $tv)
    {
        Storage::delete($tv->thumbnail);

        $tv->delete();
        return redirect()->route('admin_tvs');
    }

    // End Tv news

}
