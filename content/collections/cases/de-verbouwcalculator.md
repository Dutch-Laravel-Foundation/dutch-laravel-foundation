---
id: 9a7a90ec-54fe-490d-a60f-924505e82da7
blueprint: cases
title: 'De Verbouwcalculator'
introduction: 'De Verbouwcalculator. Een huis verbouwen.. een nieuwe woning naar jouw wensen maken of jouw huidige woning een opknapbeurt geven. Vaak een kostbaar project en waar moet je beginnen?'
description: |-
  Een huis verbouwen.. een nieuwe woning naar jouw wensen maken of jouw huidige woning een opknapbeurt geven. Vaak een kostbaar project en waar moet je beginnen? De Verbouwcalculator helpt inzicht te geven in de kosten die bij een verbouwing komen kijken. Dit helpt niet alleen om inzicht te geven of een verbouwing wel mogelijk is, maar ook kan er middels het gebruik van de Verbouwcalculator worden bepaald of je een woning überhaupt wel wilt kopen. Nadat de keuze voor het verbouwen gemaakt is, kan het rapport gebruikt worden om de juiste aannemer voor de klus te vinden.

  Voordat er via de Verbouwcalculator aan de woning gesleuteld kan worden, moet de woning eerst worden ingevoerd door een bouwtechnisch keurder. Het invoeren van de woning gebeurt tijdens een inspectie in de woning zelf. Hierdoor is een gebruiksvriendelijke en snelle interface en offline-first approach erg belangrijk.

  ### Hoe heeft Laravel ondersteunt in de ontwikkeling van Verbouwcalculator? ###
  Het framework van Laravel is het ideale startpunt geweest voor de ontwikkeling van de Verbouwcalculator. Het heeft een all-in package waardoor het niet alleen makkelijk is tijdens de implementatie, maar ook eenvoudig uit te breiden in de toekomst.

  Laravel's "Convention over Configuration" filosofie zorgt voor een eenduidige denkwijze onder haar gebruikers. De filosofie zorgt ervoor dat de custom code in de applicatie enkel bestaat uit de business logic van de klant. Hierdoor blijft de applicatie eenvoudig te begrijpen voor andere developers. Door het volgen van standaardoplossingen uit het framework blijft de applicatie te aller tijde snel en veilig.

  Testing tool kits zijn beschikbaar in het framework, tests zijn alleen nog nodig voor het controleren van de business logic van de klant.

  Voor de communicatie tussen de front end en back end is in de Verbouwcalculator gebruik gemaakt van GraphQL. De door Facebook ontwikkelde techniek maakt het mogelijk om, via een gestandaardiseerd protocol, efficiënter data uit te wisselen. Het GraphQL package voor Laravel zorgt voor een interactieve en geautomatiseerde documentatie van de queries, welke dienen als aanspreekpunt voor de API. Hierdoor is het ook mogelijk om offline-first te ontwikkelen.

  Het gebruik van het framework van Laravel in combinatie met het GraphQL package heeft er zowel in de front- als de backend voor gezorgd dat de custom code alleen bestaat uit de business logic van de klant. Door het gebruiken van eigen testen op de business logic kunnen wij waarborgen dat de applicatie eenvoudig, snel en schaalbaar blijft.

  ### Techniek ###
  #### Autorisatie ####
  Voor de autorisatie van gebruikers wordt het Oauth 2.0 protocol gebruikt, waarbij de gebruiker een toegangstoken ontvangt om de GraphQL API aan te spreken. Deze veelgebruikte standaard zorgt ervoor dat de API met kant-en-klare Oauth plugins wordt aangesproken.

  #### Resource identificatie ####
  Alle GraphQL Types vormen een deel van het platform, zoals “Building”, “Area”, “Element”, etc. Om deze terug te vinden in de database, hebben zij elk een eigen universally unique identifier (UUID) nodig. Om de front end in staat te stellen, om zonder internetverbinding, nieuwe resources aan te maken en aan elkaar te linken, maakt het systeem gebruik van deze UUID’s. Een algoritme genereert een code die als identifier door het systeem gebruikt wordt. De kans dat het algoritme een code genereert die al voorkomt in het systeem is niet gelijk aan nul, maar wel zo laag dat het verwaarloosbaar is.

  #### Queue ####
  Om sommige tijdrovende taken op een later moment op de server te verwerken kan een queue gebruikt worden. De queue wordt uitgelezen door een aantal “workers” die één voor één de opdrachten oppakken en verwerken. Denk hierbij aan opdrachten zoals het verzenden van mails, genereren van pdf-bestanden en onderhoudstaken. Daarnaast kunnen door het gebruik van een queue gefaalde opdrachten (na het verhelpen van het probleem) eenvoudig opnieuw gestart worden.

  #### Kubernetes & Docker ####
  Docker stelt ons in staat de back end applicatie te compileren tot een virtuele computer. Dit geeft de mogelijkheid de gewenste software mee te verpakken in de image. Op het moment dat er een release nodig is die extra software vereist kunnen we dit meenemen in de Docker image. Hierdoor is het niet langer nodig om tijdens het deployen de software op de server aan te passen.

  Het beheer van de hardware en Docker images wordt gedaan door Kubernetes. De software zorgt ervoor dat een verzameling van hardware tot een cluster gecombineerd wordt. Vervolgens kan er on demand meer vermogen aan het project worden geleverd. Dit kan bijvoorbeeld gebruikt worden, wanneer de queue oploopt en er tijdelijk meer workers nodig zijn.
featured_image: verbouwing.png
updated_by: 8d873b47-ad86-4fd3-9e95-27842ea80beb
updated_at: 1652881708
long_title: 'Weten wat je verbouwing kost, de volgende showcase helpt je daarbij!'
member: 4a0f57f4-997d-4532-9c9d-c5322a3ae05a
client: 964d6872-f078-4702-ba76-de96e3123ba5
---
