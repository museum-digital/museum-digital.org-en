+++
title = "nodac"
description = "nodac is museum-digital's tool for curating controlled vocabularies."

[extra]
keywords = "Software, Controlled Vocabularies, Subject Headings"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
faq = [
    [
        "Can nodac be used with my own vocabulary?",
        "Sure. A given instance of nodac always caters to only one specific vocabulary. We can however set up any number of instances."
    ],
    [
        "Can I use nodac to publish my controlled vocabulary?",
        "No. nodac is a management tool only. We have however built a separate tool, [md:term](/software/term), with which any vocabulary edited in nodac can be published."
    ],
]
+++

## nodac: Manage Controlled Vocabularies

nodac is museum-digital's tool for curating controlled vocabularies. That means labeling, describing, translating, creating hierarchies of concepts and linking concepts to the corresponding entries in external repositories like Wikidata, GND, AAT, geonames, etc.

As the primary management tool behind museum-digital's vocabularies it is essential for nodac to be trainable. In nodac, one can blacklist terms altogetherr, set up the automatic transfer of terms from one vocabulary to another and store permanent rewrites of terms to their canonical forms. It is thus build to not only facilitate a precise editing process, but also a sustainable one despite limited resources.

nodac is able to work with multiple polyhierarchical thesauri and follows the SKOS 2 standard.

### Linked open data

From the start, nodac has been written with linked open data in mind. It not only helps curating such links but also enables the automatic retrieval of data recorded at Wikidata, the Gemeinsame Normdatei (GND).

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_01_Startpage.png",
    image_alt="Start page of nodac"
    ) %}The start page of nodac lists new entries and one's own activity. It can be customized using stored searches.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_02_Overview_Actors.png",
    image_alt="Overview page for actors."
    ) %}Overview pages display the current progress in curating a given controlled vocabulary in text and in charts. All metrics are searchable.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_03_Search_Tags.png",
    image_alt=""
    ) %}A search results page for tags. In the left sidebar, you can see some of the available search options.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_06_Edit_Page_Actor.png",
    image_alt=""
    ) %}Editing page for actors (1): Each concept has a respective editing page. Here, one can add a description and other basic information, translations; categorize the entity as "approved" and set synonyms for the entry.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_07_Actors_noda_Links.png",
    image_alt=""
    ) %}Editing page for actors (2): Links to a set of the most important norm data repositories can be added as well.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_08_Edit_Page_Actor_Objects.png",
    image_alt=""
    ) %}Editing page for actors (3): nodac can be linked to musdb. If it is, objects linked to a given entity will be listed at the bottom of the editing page.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_09_Import_Wikidata.png",
    image_alt=""
    ) %}If an entity or concept is already known in Wikidata / Wikipedia, data can be imported from there. Here, Wikidata entries are offered for selection based on their names.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_10_Places_Wikidata_by_Coordinates.png",
    image_alt=""
    ) %}Specifically for places, corresponding Wikidata entities can also be found based on the place's coordinates.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_05_Actors_Blacklist.png",
    image_alt=""
    ) %}Terms that are certainly unusable in a given controlled vocabulary can be blacklisted to prevent them from similarly named entries being created ever again.{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ build_faq_list(title = "FAQ") }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/nodac/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbook (German) on nodac{% end %}

{% museumdigital_linktiles_tile(link="https://youtube.com/playlist?list=PLlwIIHnjvD4fRhTJR-5xLe-NG-C_rVEhA",
    image="/data/img/logos-ext/YouTube_social_red_square_2017.svg",
    image_alt="Logo von Youtube") %}Videos zu nodac on YouTube{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="News") }}
