<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Libs\Interfaces\DocInterface;

// use App\Http\Requests;

// class DocController extends Controller
// {
// 	protected $doc;

// 	public function __construct(DocInterface $doc)
// 	{
// 		$this->doc = $doc;
// 	}
    
//     public function index($topic = null)
//     {
//     	$page_title = "Documentation";

//     	// Set default page
// 		if ($topic === null) $topic = 'installation';
		

// 		if (file_exists(base_path('docs/' . $topic. '.md'))) {
// 			// Get Contents
// 			$content = $this->doc->getContent($topic .'.md');
// 			$page_title = ucfirst($topic);
// 			$toc = $this->doc->getTableOfContent('documentation.md');
// 		} else {
// 			\App::abort(404);
// 		}


// 		return view('frontend.docs.index', compact('toc', 'content', 'page_title', 'version'));
//     }
// }

namespace App\Http\Controllers;
use App\Documentation;
use Symfony\Component\DomCrawler\Crawler;
class DocsController extends Controller
{
    /**
     * The documentation repository.
     *
     * @var Documentation
     */
    protected $docs;
    /**
     * Create a new controller instance.
     *
     * @param  Documentation  $docs
     * @return void
     */
    public function __construct(Documentation $docs)
    {
        $this->docs = $docs;
    }
    /**
     * Show the root documentation page (/docs).
     *
     * @return Response
     */
    public function showRootPage()
    {
        return redirect('docs/'.DEFAULT_VERSION);
    }
    /**
     * Show a documentation page.
     *
     * @param  string $version
     * @param  string|null $page
     * @return Response
     */
    public function show($version, $page = null)
    {
        if (! $this->isVersion($version)) {
            return redirect('docs/'.DEFAULT_VERSION.'/'.$version, 301);
        }
        if (! defined('CURRENT_VERSION')) {
            define('CURRENT_VERSION', $version);
        }
        $sectionPage = $page ?: 'installation';
        $content = $this->docs->get($version, $sectionPage);
        if (is_null($content)) {
            abort(404);
        }
        $title = (new Crawler($content))->filterXPath('//h1');
        $section = '';
        if ($this->docs->sectionExists($version, $page)) {
            $section .= '/'.$page;
        } elseif (! is_null($page)) {
            return redirect('/docs/'.$version);
        }
        $canonical = null;
        if ($this->docs->sectionExists(DEFAULT_VERSION, $sectionPage)) {
            $canonical = 'docs/'.DEFAULT_VERSION.'/'.$sectionPage;
        }
        return view('frontend.docs.index', [
            'title' => count($title) ? $title->text() : null,
            'index' => $this->docs->getIndex($version),
            'content' => $content,
            'currentVersion' => $version,
            'versions' => Documentation::getDocVersions(),
            'currentSection' => $section,
            'canonical' => $canonical,
        ]);
    }
    /**
     * Determine if the given URL segment is a valid version.
     *
     * @param  string  $version
     * @return bool
     */
    protected function isVersion($version)
    {
        return in_array($version, array_keys(Documentation::getDocVersions()));
    }
}