<h1>Project HappyLand</h1>

Binnenkort wordt er een nieuw pretpark gebouwd met de originele naam Pretpark HappyLand. In dit pretpark draait alles om lol maken en heel veel lachen. Voor dit pretpark wordt een website gemaakt, zodat mensen dit pretpark kunnen vinden en er gelijk goed zichtbaar is wat er te vinden is in het park. Het idee is om verschillende rollen aan te maken en daarvoor kunnen we in het account delen aan- en uitzetten, dan is voor de ene gebruiker iets wel zichtbaar en voor de ander niet, de een kan iets wel aanpassen en de ander niet. 

<h2>HappyLand lokaal krijgen</h2>
<ol>
    <li>Voordat je gaat beginnen met het project installeren zorg dat je docker en lando heb geïnstalleerd en dat het werkt</li>
    <li>Typ in de terminal <code>git clone https://github.com/ZadkineICT/mvc-project-2019-team-robert-mitchell-olaf.git</code> op de plek waar je het project wilt hebben</li>
    <li>Typ in de terminal <code>cd mvc-project-2019-team-robert-mitchell-olaf</code> om naar het project te gaan</li>
    <li>Vervolgens moet je <code>composer install</code> doen om de vendor map te krijgen</li>
    <li>Daarna moet je de <code>.env.example</code> kopiëren en de naam veranderen naar <code>.env</code>. Dit bestand is te vinden in de root van het project, dus niet in de mappen gaan zoeken</li>
    <li>Verder moet je <code>lando init</code> doen en de vragen beantwoorden. Het antwoord op de eerste vraag is <code>current directory</code>. Op de tweede vraag is het antwoord <code>Laravel</code>. Om naar de antwoorden te navigeren doe je met de pijltjestoetsen en het antwoord te bevestigen met enter. De laatste vraag moet je zelf intypen en dat antwoord is <code>public</code></li>
    <li>Ga vervolgens een key generaten met <code>lando artsan key:generate</code></li>
    <li>Typ daarna in de terminal <code>lando start</code> en je hebt de website is aangemaakt en het werkt lokaal</li>
</ol>

<h2>Regels</h2>
<ul>
    <li>Merge nooit naar de masterbranch zonder overleg</li>
    <li>Laat je user-story controleren door ieder teamlid voordat het naar development gaat</li>
</ul>
