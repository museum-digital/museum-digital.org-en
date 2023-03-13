+++
title = "museum-digital"
description = "Start page of museum-digital's project page"
template = "startpage.html"

[extra]
keywords = "Museums, Digitization, Community, Research"
banner_image = "/data/img/zalfa-imani-1xp5VxvyKL0-unsplash.jpg"
banner_image_alt = "Zalfa Imani, December 1, 2020, Unsplash License, https://unsplash.com/photos/1xp5VxvyKL0"
page_banner = [
    [
        "/data/img/zalfa-imani-1xp5VxvyKL0-unsplash.jpg",
        "",
        "museum-digital:global",
        "museum-digital helps museums bring their collections online. All published objects can be found at museum-digital:global.",
        [
            "https://global.museum-digital.org/search.php",
            "sv",
            "Browse the collections"
        ]
    ],
    [
        "/data/img/banners/cat.jpg",
        "",
        "Digital Storytelling",
        "Using the <a href='/software/themator/'>Themator</a>, museums can publish their narratives digitally both in a more traditional 'portal' form as well as a scrollytelling format",
    ]
]
html_id = "home"
+++

## museum-digital

museum-digital is an initiative, it is a software suite, and it is a platform. In January 2009, museum workers from the German state of Saxony-Anhalt gathered at the Kreismuseum Bitterfeld to discuss digitization and agreed to go online together. This was the founding event of museum-digital. Even then it was clear: Going online and becoming visible can only be achieved together. Together, software was developed; together, the museums present themselves and their objects online. What started as a small group in Saxony-Anhalt has now grown into a community that transcends national and language borders.

----

{{ museumdigital_map_global() }}

----

### Collaboration and Mutual Aid

Every museum has its possibilities and aims. At museum-digital, they work together. In contrast to other portals, museum-digital offers tools both for [publishing](/software/frontend) and [indexing object information](/software/musdb). All museums of the instances using a common primary language are using a shared pool of controlled and enriched terms. Working on a centralized pool of controlled vocabularies saves each museum a lot of time and helps to visualize links between information from the different museums. It is thus a central part of successfully publishing online.

The community is inclusive and open: every museum can participate, as the greatest treasures are often found at far-off places. Being open for museums of all kinds and sizes is only possible by putting flexibility and simplicity first. These, together with giving each museum and user full control over their data are the main principles of museum-digital.

----

### The Fruit of Common Efforts

<br/>

{% lr_section_image_right(image = "/data/img/logo/mdlogo-code-256px.png", image_alt = "Logo") %}
#### Publishing, from a regional to a global context

Museums publish and manage their collection data primarily in regional instances of museum-digital. Published data is however also aggregated in larger instances, such as [museum-digital:global](https://global.museum-digital.org/), that allow searching in all the collections published on museum-digital.

<form action="https://global.museum-digital.org/search.php">
    <input type="search" name="sv" placeholder="Browse the collections">
</form>
{% end %}

<br/>

{% lr_section_image_left(image = "/data/img/logos/mdterm-512px.png", image_alt = "Logo") %}
#### Taking load off each other's shoulders

For making such a diverse set of objects - from museums from different countries and recorded using different languages - legible and searchable, controlled vocabularies are an essential tool. At museum-digital we keep centralized vocabularies for different types of entries. If a museum thus has already linked an object to a place, that place is available to all other museums as well. Our controlled vocabularies can be browsed and downloaded at [md:term](https://term.museum-digital.de/).
{% end %}

----

## Calendar

{{ calendar_upcoming_events(cal_directory="/about/calendar/", hl_all="Upcoming events", hl_local="Upcoming events in English", feed_all="upcoming_events", feed_local="upcoming_events_local") }}
