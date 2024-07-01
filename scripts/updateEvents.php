<?PHP
/**
 * Fetches data from RSS feeds and caches them as JSON files to the relevant cache directory.
 * For use with museumdigital_rss_tile.
 *
 * @author Joshua Ramon Enslin <joshua@jrenslin.de>
 */
declare(strict_types = 1);

require __DIR__ . '/../themes/museum-digital-theme-zola/scripts/IcalReader.php';
require_once __DIR__ . '/../config/php-conf.conf.php';

$reader = new IcalReader(ICAL_FEEDS);
$reader->savePages(__DIR__ . '/../content/about/calendar');
$reader->saveUpcomingToJson(__DIR__ . '/../cached/upcoming_events.json', 'd.m.Y H:i', "d. m.");
$reader->saveUpcomingToJson(__DIR__ . '/../cached/upcoming_events_local.json', 'd.m.Y H:i', "d. m.", ["en"]);
