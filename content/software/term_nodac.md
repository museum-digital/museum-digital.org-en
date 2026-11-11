+++
title = "md:term & nodac "
description = "At museum-digital we build two tools for managing and displaying controlled vocabularies: md:term and nodac."

[extra]
keywords = "Software, Controlled Vocabularies, Subject Headings"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## Our Tools for Managing Controlled Vocabularies: nodac and md:term

nodac is the name of our tool for correcting, enriching, and stratifying controlled vocabularies at museum-digital. Nodac is multilingual and can be used for controlling vocabularies in different languages. Using nodac, external vocabularies can be managed as well: for example the Hornbostel-Sachs-Systematik for musical instruments or the Hessische Systematik. The primary use of the tool remains, however, the curation of the museum-digital's own controlled vocabularies. It is the dedicated place for in-depth enrichment of terms from the domains of "actors" (people and institutions), geographic places, times, and tags. These are controlled centrally for a given language by the _norm data editors_. Each participating museum can however submit requests for changes.

While it is the dedicated aim of museum-digital to make entering and linking - for example - a tag as easy as possible for the museums, further edits like providing a definition of the term and linking it with other controlled vocabularies are taken over by the norm data editors. It thus becomes a background task, that does however remain central to the success of the whole endeavor. It is only because we keep curated controlled vocabularies, that we can generate correct timelines or place objects on maps in any meaningful way.

md:term is the public equivalent of nodac. It provides for public, structured access to our own vocabularies and a number of external ones. Besides making the vocabularies browse-able, it offers [SKOS](https://en.wikipedia.org/wiki/Simple_Knowledge_Organization_System) and [JSON](https://de.wikipedia.org/wiki/JavaScript_Object_Notation) interfaces. In this way, it provides access for other developers and projects to creatively use and incorporate our controlled vocabularies.

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-512px",
    image_alt="Logo") %}nodac{% end %}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-512px",
    image_alt="Logo") %}md:term{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/de/categories/md-term/atom.xml",
    html_url="https://blog.museum-digital.org/de/categories/md-term/",
    title="News") }}
