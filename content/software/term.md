+++
title = "md:term"
description = "md:term is a vocabulary browser that is, among others, used for making museum-digital's controlled vocubaliries accessible on their own."

[extra]
keywords = "Software, Controlled Vocabularies, Subject Headings"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p518.jpg"
banner_image_alt = "Image from page 518 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## md:term - Vocabulary Browser

md:term is a browser for controlled vocabularies. Using it one can navigate through hierarchies of keywords and places, view the description and translations of labels and concepts. Most importantly the controlled vocabularies are made searchable and provided in a machine-readable formats as much as in a human readable way.

----

### md:term as a portal

The reference implementation of md:term presents museum-digital's controlled vocabularies for places, actors, tags and time along with some external ones like Hornbostel-Sachs-Systematk or Technikthesaurus. The vocabularies presented in md:term can be downloaded in bulk.

md:term might be used independent of museum-digital as a presentation tool for vocabularies. However, it works best in combination with [nodac](/software/nodac).

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_place_2.png",
    image_alt="md:term place page: Hansaviertel"
    ) %}Besides the always-available links to machine-readable export options, base information and links to norm data repositories, place pages list super- and subordinate places and the place on a map.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_tag.png",
    image_alt="md:term tag page"
    ) %}A tag page will position the tag hierarchically, reference other norm data repositories, describe it and offer machine-readable export options. Additionally, objects from museum-digital may be listed.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_downloads.png",
    image_alt="Download page of md:term"
    ) %}Full JSON and SKOS / XML dumps of our controlled vocabularies can be downloaded using the download page{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/md-term/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbook (German) on md:term{% end %}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API documentation{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term-en/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term-en/",
    title="News") }}
