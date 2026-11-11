+++
title = "Software"
description = "At museum-digital, we have developed a set of software solutions to aid different parts of museum (digitization) work."

[extra]
keywords = "Software, Museums, Museum Objects, Museum Software, museum-digital"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/grand_tour.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "software"
+++

## Software

At museum-digital, we have developed a set of software solutions to facilitate an easy and inclusive process of digitization in museums. Originally, museum-digital was founded to publish object information online. We thus began by developing a [public interface for viewing object information](/software/frontend).

Since the original method of data input - the museums entered their data into their local database, sent it to the programmers, the programmers entered it to museum-digital - did not scale well, we then developed a simple online input interface, [musdb](/software/musdb). Some museums, that did not yet have a dedicated database for inventorized data, but knew musdb well, began to ask additional inventory functionalities. And thus the approach of musdb changed: instead of being an input interface to a publication platform, it turned into an inventory tool with the option to publish.

Soon after, requests for options to more thoroughly present digital narratives and stories became more frequent. While museum objects may be interesting by themselves, it is also a central task of museums to contextualize them. As a reaction to these requests, we created the [Themator](/software/themator) as an independent tool for writing and publishing stories online.

Early on, when developing the main frontend and musdb, we decided to use controlled vocabularies for all databases of a given language. Internally, we use our "norm data control tool" [nodac](/software/term-nodac) for curating these. Since the vocabularies have grown considerably since, and have become a useful resource on their own by now, we have also developed a searchable frontend for these, [md:term](/software/term).

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/frontend",
    image="/data/img/logo/mdlogo-code-128px.png",
    image_alt="Logo") %}Frontend/Portals{% end %}

{% museumdigital_linktiles_tile(link="/software/musdb",
    image="/data/img/logo-musdb/musdbLogoBrown-128.png",
    image_alt="Logo") %}musdb{% end %}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}nodac{% end %}

{% museumdigital_linktiles_tile(link="/software/themator",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Themator{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/categories/development/atom.xml",
    html_url="https://blog.museum-digital.org/categories/development/",
    title="Tech-Related News in our Blog") }}
