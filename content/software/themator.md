+++
title = "Themator"
description = "The Themator is museum-digital's solution for digital story-telling."

[extra]
keywords = "Software, Story Telling, Topics, Stories, Narrative, Exhibitions"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/trappist_cut.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "themator"
og_image = "/data/img/logos/themator-512.png"
+++

## The Themator - A Tool for Online Storytelling and Digital Exhibitions

The Themator is museum-digital's solution for digital story-telling.

After setting up the [main frontend](/software/frontend) for museum-digital, questions for how to embed the thus published objects in online narratives soon arose. To answer this demand, the development of the Themator began.

The Themator is structured around topics, which can be super- or subordinate to other topics and which can be associated with objects (both those entered only in the Themator and those published in any of the main portals of museum-digital), literature entries, and more. This focus on topics provides for a broad range of possible uses in the field of digital storytelling, especially where it relates to museum objects. On the one hand, the Themator can be used for creating digital exhibitions. On the other, it has been used to create learning materials (e.g. for teaching in German minority schools in Hungary). This, combined with the need to be able to embed objects from the different instances in the same topic, led us to design the Themator as a tool completely independent from the main instances.

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-Overview.jpg",
    image_alt="Overview of topics available in the German-language Themator"
    ) %}Overview of topics available in the German-language Themator{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicPage.jpg",
    image_alt=""
    ) %}A topic page in the Themator{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-ExhibitionView.jpg",
    image_alt=""
    ) %}The Themator features a slideshow-like "exhibition view"{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicObjects.jpg",
    image_alt="List of objects linked to a topic"
    ) %}List of objects linked to a topic{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-SingleObject.jpg",
    image_alt=""
    ) %}Page for a single object. Besides those entered only in the Themator, objects can also be embedded from museum-digital{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://themator.museum-digital.de/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Themator (German){% end %}

{% museumdigital_linktiles_tile(link="https://hu-themator.museum-digital.org/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Themator (Hungarian){% end %}

{% museumdigital_linktiles_tile(link="https://ua-themator.museum-digital.org/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Themator (Ukrainian){% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Themator/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbook (German) on the themator{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/technik-design/themator-de/feed/",
    html_url="https://blog.museum-digital.org/category/technik-design/themator-de/",
    title="News About the Themator") }}
