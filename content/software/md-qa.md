+++
title = "museum-digital:qa"
description = "museum-digital:qa is a web service providing a public access to the quality assessment tools of museum-digital."

[extra]
keywords = "musdb, Data quality, Interoperability, Web service, API, Collection Management System"
banner_image = "/data/img/banners/US_Capitol_Workmen-Make-Dome--Repairs_1960_9257463248_63f45a4878_o.jpg"
banner_image_alt = "Public domain / US gov't work. US Capitol / Workmen Make Dome Repairs 1960."
html_id = "mdqa"
og_image = "/data/img/logo/mdlogo-code.svg"
+++

## museum-digital:qa

museum-digitial:qa is a publicly accessible web service providing quality checks for object data. By reusing those parts of museum-digital's import tool that are relevant to the parsing of different import formats, object data may be provided either in open standards like LIDO as well as a range of software-specific, proprietary formats different collection management systems offer for exporting their data.

Based on the data thus extracted, museum-digital:qa offers access to quality checks. On the one hand, it allows museums who do not use musdb to check their data using the same quality checks provided in musdb.

 On the other hand, it museum-digital:qa a plattform to easily add further checks that are not built into musdb yet. Starting with a check for the conformity of object records according to the recommendations of the Working Group Minimaldatensatz (minimum viable object record), which aims to define a set of basic fields required for a worthwhile publication of object records, further, more specific checks (and other tools) can be easily built into museum-digital:qa while making use of the breadth of its supported input formats to be usable by a wide range of museums.
 
## Made to be reused

While museum-digital:qa is also usable using a web interface, it offers a full, public API that may be reused by software vendors to implement the same quality checks musdb offers to their users. Reuse is strongly encouraged to hopefully increase the quality of data provided by museums in general, regardless of their choice of collection management system.

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://quality.museum-digital.org/",
    image="/data/img/logo/mdlogo-code.svg",
    image_alt="Logo") %}museum-digital:qa{% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/misc/md-qa/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbook (German) on md:qa{% end %}

{% museumdigital_linktiles_tile(link="https://quality.museum-digital.org/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API documentation{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/museum-digital-qa-en/feed/",
    html_url="https://blog.museum-digital.org/category/development/museum-digital-qa-en/",
    title="News") }}
