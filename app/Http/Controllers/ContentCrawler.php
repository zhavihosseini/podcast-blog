<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Exception;
class ContentCrawler extends Controller
{
    private $client;
    /**
     * Class __contruct
     */
    public function __construct()
    {
        $this->client = new Client([
            'timeout'   => 10,
            'verify'    => false
        ]);
    }
    /**
     * Content Crawler
     */
    public function getCrawlerContent()
    {
        try {
            $response = $this->client->get('https://sookhtejet.com/%db%b1%db%b1-%d9%82%d8%af%d9%85-%d9%86%d9%88%d8%b4%d8%aa%d9%86-1/'); // URL, where you want to fetch the content
            // get content and pass to the crawler
            $content = $response->getBody()->getContents();
            $crawler = new Crawler( $content );
            $_this = $this;
            $data = $crawler->filter('body')
                ->each(function (Crawler $node, $i) use($_this) {
                    return $_this->getNodeContent($node);
                }
                );
            dump($data);

        } catch ( Exception $e ) {
            echo $e->getMessage();
        }
    }
    /**
     * Check is content available
     */
    private function hasContent($node)
    {
        return $node->count() > 0 ? true : false;
    }
    /**
     * Get node values
     * @filter function required the identifires, which we want to filter from the content.
     */
    private function getNodeContent($node)
    {
        $array = [
            'title' => $this->hasContent($node->filter('.post-title')) != false ? $node->filter('.post-title')->text() : '',
            'content' => $this->hasContent($node->filter('.entry-content')) != false ? $node->filter('.entry-content')->text() : '',
            'author' => $this->hasContent($node->filter('.post-author-url')) != false ? $node->filter('.post-author-url')->text() : '',
            'authordesc' => $this->hasContent($node->filter('.post-author-bio')) != false ? $node->filter('.post-author-bio')->text() : '',
            'time' => $this->hasContent($node->filter('.time')) != false ? $node->filter('.time')->text() : '',
            'featured_image' => $this->hasContent($node->filter('.post__image a img')) != false ? $node->filter('.post__image a img')->eq(0)->attr('src') : ''
        ];
        return $array;
    }
}
