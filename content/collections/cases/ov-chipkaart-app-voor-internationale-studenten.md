---
id: 4a6e8868-29d2-40ff-bc60-9ef0a3da6772
blueprint: cases
title: 'OV-chipkaart-app voor internationale studenten'
title_long: 'Mobiele app, API en adminpanel als MVP voor toetsing onder duizenden reizigers'
introduction: 'Laravel is een geweldig framework voor developers om complexe webapplicaties in te bouwen. Maar voor opdrachtgevers is het soms lastig om te bepalen wat er nou eigenlijk allemaal te bouwen is met Laravel. In een aantal showcases inspireren we potentiële opdrachtgevers met concrete oplossingen die door onze leden zijn gebouwd met behulp van Laravel.'
featured_image: ov-chipkaart.jpeg
member: 5fb23f56-8af1-4e31-9134-15c7c22deedf
updated_by: 8d873b47-ad86-4fd3-9e95-27842ea80beb
updated_at: 1655317238
client: 1aee614c-16a5-4fef-a620-e2e6523e533e
content:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'De app ISIC Mobility is er voor internationale studenten om gemakkelijk mobiliteitskaarten (zoals OV-chip) te kunnen toevoegen en activeren. In de app kan de gebruiker zijn of haar profiel beheren, betalingen instellen en reistransacties en rekeningen inzien. We bieden ook de mogelijkheid om vanuit de app de rekening direct te betalen.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'Achter de app staat een robuust systeem voor het beheren van de internationale studenten die gebruik maken van de ISIC Mobility app. Door kritisch te kijken naar de belangrijkste features voor de eindgebruikers en het beheer ervan, vormt het nu de basis van een future-proof platform voor contactloos reizen in Nederland.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'De reis begint met een MVP'
  -
    type: paragraph
    content:
      -
        type: text
        text: "Doel is om een MVP (minimum viable product) te bouwen en deze te toetsen onder internationale studenten. Het moet de basis vormen voor doorontwikkeling naar andere mobiliteitsoplossingen. We ontwikkelden parallel aan een\_"
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'https://enrise.com/2017/10/near-native-why-we-use-this-for-mobile-applications/'
              rel: null
              target: blank
              title: null
        text: 'near native'
      -
        type: text
        text: "\_"
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'https://enrise.com/diensten/mobiele-apps/'
              rel: null
              target: _blank
              title: null
        text: 'mobiele app'
      -
        type: text
        text: "\_en een REST-api, ook wel de middleware genoemd. De middleware is gericht op het verwerken van transacties via Mobiliteitsfabriek. Deze transacties worden aan de app beschikbaar gesteld via een API. Transacties worden omgezet naar rekeningen, die via payment provider Mollie worden betaald via en automatische incasso. Naast de API hebben we ook een adminpanel gekoppeld aan de middleware, zodat Mobiliteitsfabriek gebruikersaccounts kunnen beheren."
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Mobiliteitsfabriek over Enrise'
  -
    type: paragraph
    content:
      -
        type: text
        marks:
          -
            type: italic
        text: "“Enrisers onderscheiden zich van andere ontwikkelaars door hun openheid naar de klant toe, professionaliteit en samen een team vormen. Er voor gaan.”\_"
      -
        type: text
        text: '~ Roeland Cuijpers, Co-founder Mobiliteitsfabriek'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Waarom Laravel hier de juiste oplossing is'
  -
    type: paragraph
    content:
      -
        type: text
        text: "De middleware ontwikkelden we met PHP-framework\_"
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'https://laravel.com/'
              rel: null
              target: _blank
              title: null
        text: Laravel
      -
        type: text
        text: ". Voor het adminpanel gebruiken we\_"
      -
        type: text
        marks:
          -
            type: link
            attrs:
              href: 'https://nova.laravel.com/'
              rel: null
              target: _blank
              title: null
        text: 'Laravel Nova'
      -
        type: text
        text: '. Dankzij Laravel is het mogelijk om snel een API op te zetten voor de mobiele app. Met Laravel Nova heeft de klant direct controle over alle data in de applicatie vanuit een mooi admin panel. Doordat wij gebruik maken van ontwikkeltools die mobiele applicaties kunnen uitgeven op zowel Android als iOS, is de app voor Mobiliteitsfabriek ook gelijk platformonafhankelijk. Met slechts een kleine extra handeling wordt de applicatie zowel in de Apple App Store als in de Google Play Store beschikbaar.'
---
