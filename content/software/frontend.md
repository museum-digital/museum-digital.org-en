+++
title = "Frontend/Portal"
description = "Most of the work museum-digital does focuses on bringing museums online. We do so mainly using our main frontend/portal software."

[extra]
keywords = "Software, Museums, Museum Objects, Museum Software, Exhibitions, Web Portal"
banner_image = "/data/img/banners/RooseveltRoadViaduct_1920_InternetArchive_p280.jpg"
banner_image_alt = 'Image from page 280 of "The practical aspect of the slope deflection method and its application to the design of the Roosevelt Road Viaduct" (1920); Grodsky, Morris; Contributing Library: Paul V. Galvin Library, Illinois Institute of Technology; Digitizing Sponsor: CARLI: Consortium of Academic and Research Libraries in Illinois'
html_id = "frontend"
og_image = "/data/img/logo/mdlogo-code-1024px.png"
faq = [
    [
        "How can a museum publish its objects on museum-digital?",
        "The museum first needs to set up in [musdb](/software/musdb) by the regional administrators responsible for the respective instance of museum-digital. For this, we require a name, an address, a short description of the museum (min. 25 characters), and an image symbolizing the museum. Once the museum has been set up in musdb, objects can be entered and published one by one - or the existing collection data of an institution can be imported in bulk. The institution is only publicly listed once one of its objects has been published."
    ],
    [
        "Are past versions of object pages archived for enabling scientific references?",
        "Yes. Once a public object page has been updated, a snapshot of its contents are taken and made available using the page archive."
    ],
    [
        "Does the frontend of museum-digital offer persistent URLs?",
        "We do not automatically assign DOIs, handles, or anything alike to published pages. We however take utmost care, that any URL of a primary page (e.g. an object or museum page) is kept stable and that there are sufficient referals from old URL structures to have no links be lost. For our approach to this topic, see Tim Berners-Lee's's [_Cool URIs don't change_](https://www.w3.org/Provider/Style/URI)."
    ],
    [
        "Is the layout of the frontend of museum-digital responsive?",
        "Yes."
    ],
    [
        "I have a great idea for a new visualization method? Can you implement it?",
        "If it is really a good and suitable idea, sure. Just send us a mail."
    ],
]
+++

## The Main Frontend of museum-digital

museum-digital was founded to publish museum object information online. That's not possible without the right software.

The "frontend" is thus the first application, that was developed at museum-digital. With it, museums can join together to present themselves and their objects online.

To offer a comprehensive glimpse at the museums and their objects, a variety of additional information has been made presentable since. On the one hand, museums can now add information on their collections, object groups, exhibitions, and events. On the other, a number of options for linking and visualizing information have been added.

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Startpage.jpg",
    image_alt=""
    ) %}Start page of the German national portal of museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExtendedSearch.jpg",
    image_alt="Extended search page in the museum-digital frontend."
    ) %}Using the extended search settings, users can define exact searches.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-EnrichedSearchPages.jpg",
    image_alt="Enriched search results in the museum-digital frontend"
    ) %}Search result pages are enriched based on data from our controlled vocabularies.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Timeline.jpg",
    image_alt="A timeline page in museum-digital."
    ) %}The museum-digital frontend offers a timeline, for viewing search results sorted by their relations to time.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-oak.jpg",
    image_alt="Objects on map pages in museum-digital."
    ) %}Using the "objects on map" pages, users can find interesting objects based on their geographical background.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Object.jpg",
    image_alt="An object page."
    ) %}An object page in the frontend of museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Multilingual.jpg",
    image_alt="Multilinguality in the museum-digital frontend."
    ) %}museum-digital is multilingual, and so, too, can be the displayed entries. The navigation language and the record language can be switched independent of each other.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExhibitionOverview.jpg",
    image_alt="Exhibition overview page in the museum-digital frontend"
    ) %}The exhibition overview page in tiles mode.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Calendar.jpg",
    image_alt="Calendars are available for exhibitions and events."
    ) %}Calendars are available for exhibitions and events.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-GraphView.jpg",
    image_alt="Graph view"
    ) %}The "graph view" offers users an alternative option for navigating the portal.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Keyboard.jpg",
    image_alt="Keyboard control of the museum-digital frontend."
    ) %}Power users can navigate the portal using their keyboard through an emacs-inspired interface.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Compare.jpg",
    image_alt="Comparing obects"
    ) %}Two objects can be compared with each other.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Technical Information

#### Focus - Design Principles

"The "frontend" of museum-digital is primarily designed to always offer a clear focus on whichever information is central to a given page or section. This allows for easy understanding. A lot of additional options exist for power users - from visualizations to a command line menu embedded into the website. These are however "hidden" in sidebars or only accessible through keyboard shortcuts, so that they don't irritate first-time users.

#### API(s)

Publishing and making things accessible doesn't only mean making it possible to view something. It also means enabling people to use data to realize their own ideas. Accordingly, all information that is published using the "frontend" of museum-digital is also accessible in a machine-readable way via our JSON API.

As much as possible, the "frontend" provides information in open standards as well: object information can be accessed in [LIDO](http://www.lido-schema.org/), information about museums can be downloaded as electronic business cards ([vCard](https://de.wikipedia.org/wiki/VCard)), and calendar information such as exhibitions can be integrated with calendar tools using the [iCalendar](https://de.wikipedia.org/wiki/ICalendar) standard.

{{ highlighted_tile_section(headline = "Open Standards", tiles = [
    [
        'LIDO',
        'for object metadata',
        "Based on [CIDOC-CRM](https://www.cidoc-crm.org/), LIDO offers a standardized XML format for exchanging object metadata for museums. Many of the central concepts museum-digital is built on originate from LIDO (such as the event structure for more precisely describing location and dating).",
    ],
    [
        'iCalendar',
        'for calendar entries',
        "Calendar entries for events and exhibitions can be downloaded and subscribed to using the [iCalendar](https://de.wikipedia.org/wiki/ICalendar) format and the adjacent WebCal standard. iCalendar is a well-established format that can - among others - be used for importing events to one's mobile calendar.",
    ],
    [
        'vCard',
        "for institutions' contact information",
        "What iCalendar is for calendar entries, vCard is for contact information: A very simple and widely adopted standard that can be used for exchanging contact information between practically all of the popular address book managers. museum-digital's frontend implements the interoperable sharing of museums and collections' contact information using vCard.",
    ],
    [
        'oEmbed',
        'for referencing object, series, and institution pages',
        'oEmbed is a standard for describing the preferred way to embed a page in another. Using oEmbed, object, institution and series pages can be referenced in - e.g. - WordPress blog posts in a breeze.',
    ],
    [
        'TEI',
        'for transcriptions',
        'TEI (Text Encoding Initiative) is a standard for encoding text in a maschine-readable way. At museum-digital, it is natively supported for transcriptions and can be used as an alternative output format for object information focusing on transcriptions and the sending / receiving of letters and similar objects.',
    ],
    [
        'IIIF',
        'for images',
        '[IIIF](https://iiif.io/) offers a standardized API for referencing images or sections of these. In the standard setup, images are gathered to represent a thing (e.g. a museum object), but these collections can in turn be compiled into superordinate collections. As IIIF requires server-side editing of the images before they are sent to the user, it is only available for locally hosted images. For these however, IIIF version 2.1 is fully implemented.',
    ],
    [
        'RSS',
        'for staying up-to-date',
        "Where objects, events, or exhibitions are listed, museum-digital's frontend generates an RSS feed. These feeds can be subscribed to using a feed reader.",
    ],
    [
        'JSON-LD',
        'for making information legible to Search Engines',
        "Google and other search engines can use more detailed [structured data](https://developers.google.com/search/docs/advanced/structured-data/intro-structured-data) for generating previews about some commonly appearing types of data - such as events or FAQs. Whereever suitable, the required structured data is provided by the frontend.",
    ]
]) }}

#### Development

The "frontend" of museum-digital is built using PHP8 and MySQL. JavaScript is used for interactive features and visualizations. A list of the used libraries can be found here. We use git for version control.

----

{% counter_section_left(api = "md_frontend_system", name = "languages") %}
The frontend is build for multi-lingual use and has been translated to a number of languages. Of course, we are always looking forward to help in translating the frontend (just like all other tools at museum-digital) to new languages. A description of how our dedicated translation tool can be used for doing so is [available on the blog (German)](https://blog.museum-digital.org/de/2019/03/02/museum-digital-uebersetzen/).
{% end %}

----

{% counter_section_right_plain_number(api = "md_global_stats", selector = "museums", name = "institutions") %}
Many museums come together to use museum-digital as a publication platform - and thus come to present their objects using the frontend.
{% end %}

----

{{ build_faq_list(title = "FAQ") }}

----

### Resources

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Ausgabe/",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="") %}Handbook pages (German){% end %}

{% museumdigital_linktiles_tile(link="https://global.museum-digital.org/musdb/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API documentation{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/frontend/feed/",
    html_url="https://blog.museum-digital.org/category/development/frontend/",
    title="News About the Frontend in the Blog") }}
