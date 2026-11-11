+++
title = "Terminology work"
description = "At museum-digital we use controlled vocabularies, to enrich the users' experience. Here we describe, how they are handled."

[extra]
keywords = "Terminology, Museums, Controlled Vocabularies, Tagging"
banner_image = "/data/img/banners/Banner_Heiligbrodt_Collections_Insects_Unlocked.jpg"
banner_image_alt = "Public domain image by Alex Wild for the Insects Unlocked project. / Ludolph Heiligbrodt collection / The insect collection of 19th century Texas naturalist Ludolph Heiligbrodt is housed at the University of Texas at Austin."
html_id = "terminology"
+++

## Controlled Vocabularies at museum-digital

Controlled vocabularies are a central issue to museum-digital. Sorted into four catagories (Persons and Institutions, Geographical Places, Times, and Keywords), terms are enriched with definitions and links to external controlled vocabularies and services (Wikipedia, GND, ULAN, RKD, MBL, LAGIS, geonames, TGN, AAT, LCSH, ...). At the same time, they are categorized hierarchically. This provides for the possibility to return objects linked to subordinate terms to searches for a given superordinate term. A search for "vehicle" thus returns any object linked to "car" as well.

----

### How are the Vocabularies Controlled?

The curation of controlled vocabularies at museum-digital takes place in a centralized manner. All museums of all instances of a given primary language work together to create a common database of controlled terms. Since curating controlled vocabularies is time consuming, we try to reduce the participating museums' workload in this regard as much as possible. Besides, a centralized curation of controlled vocabularies leads to more uniform results.

To ease the curation, we have developed a tool, "[nodac](/software/nodac)", which automatizes much of the enrichment work and offers a simple interface for positioning terms hierarchically. With this tool, norm data editors, can also use batch editing functionalities for enhancing the controlled vocabularies.

The curation of controlled vocabularies is thus a joint effort of the participating museums, direct volunteering, and support by a number of state governments, led by a small team of "norm data editors".

----

### Current Progress

"Cleaning" and ordering the controlled vocabularies is an ever-ongoing effort. To get a clearer view of how far we've progressed in terms of actually controlling the vocabularies, we work with an approval system.

{{ chart_md_vocabulary_progress() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term: Vocabulary browser{% end %}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}nodac{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/categories/terminology/atom.xml", html_url="https://blog.museum-digital.org/categories/terminology/", title="News") }}

{{ embed_chartjs() }}
<script src="/js/dashboard-controlled-vocabs-status.js" type="text/javascript" async></script>
