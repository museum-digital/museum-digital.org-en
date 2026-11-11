<?PHP
/**
 * Fetches data from RSS feeds and caches them as JSON files to the relevant cache directory.
 * For use with museumdigital_rss_tile.
 *
 * @author Joshua Ramon Enslin <joshua@jrenslin.de>
 */
declare(strict_types = 1);

const CACHE_DIR = __DIR__ . '/../cached/fetched_feeds/';

const FEEDS = [
    'https://blog.museum-digital.org/categories/terminology/atom.xml',
    'https://blog.museum-digital.org/categories/development/atom.xml',
    'https://blog.museum-digital.org/categories/frontend/atom.xml',
    'https://blog.museum-digital.org/categories/musdb/atom.xml',
    'https://blog.museum-digital.org/categories/themator/atom.xml',
    'https://blog.museum-digital.org/categories/md-term/atom.xml',
    'https://blog.museum-digital.org/categories/nodac/atom.xml',
    'https://blog.museum-digital.org/categories/museum-digital-qa/atom.xml',
    'https://blog.museum-digital.org/categories/community/atom.xml',
    'https://blog.museum-digital.org/atom.xml',

    'https://blog.museum-digital.org/authors/jrenslin/atom.xml',

];

require __DIR__ . '/../themes/museum-digital-theme-zola/scripts/getRssFeed.php';

