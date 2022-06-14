<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    public function show() {
        $birthday = Carbon::parse('2002-10-04 00:00:00');
        $start = Carbon::parse("2016-04-25 00:00:00");
        $now = Carbon::now();

        $age = $birthday->diffInYears($now);
        $experience = $start->diffInYears($now);


        return view('welcome', [
            'age' => $age,
            'experience' => $experience,
            'loadingMessage' => $this->randomLoadingMessage()
        ]);
    }

    public function demosPage() {
        return view('demos', [
            'loadingMessage' => $this->randomLoadingMessage()
        ]);
    }

    public function sendMessage(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'project' => ['required', 'string', 'max:255'],
        ]);

        $details = [
            'name' => $request['name'],
            'email' => $request['email'],
            'project' => $request['project']
        ];

        \Mail::to('contact@jasperjakobs.nl')->send(new \App\Mail\contactForm($details));

        return redirect()->route('home')->with('success', 'Het formulier is succesvol verzonden!');
    }

    public function randomLoadingMessage() {
        $loadingMessages = [
            "Gevatte dialogen genereren...",
            "Tijd en ruimte verwisselen...",
            "Met geweld rond de y-as draaien...",
            "Het echte leven symboliseren...",
            "De lepel buigen...",
            "Het moreel filteren...",
            "Denk niet aan paarse nijlpaarden...",
            "We hebben een nieuwe zekering nodig...",
            "Fijne dag.",
            "Windows wordt voor u geupdate, uw pc wordt meerdere keren opnieuw opgestart. Leun achterover en ontspan.",
            "De architecten zijn nog aan het tekenen",
            "We bouwen de gebouwen zo snel als we kunnen",
            "Heb je liever kip, biefstuk of tofu?",
            "(Let niet op de man achter het gordijn)",
            "Wacht even terwijl de elfjes je kaart tekenen",
            "Maak je geen zorgen - een paar stukjes probeerden te ontsnappen, maar we hebben ze gevangen",
            "Wil je daar frietjes bij?",
            "De zwaartekrachtconstante in uw land controleren...",
            "Ga je gang -- houd je adem in!",
            "Hum iets luid terwijl anderen staren",
            "De server wordt aangedreven door een citroen en twee elektroden.",
            "We stellen je geduld op de proef",
            "Alsof je een andere keuze had",
            "Volg het Witte konijn",
            "Waarom bestel je geen broodje?",
            "De bits stromen langzaam vandaag",
            "Graaf op de 'X' voor begraven schat... ARRR!",
            "Het is nog steeds sneller dan je het zou kunnen tekenen",
            "De laatste keer dat ik dit probeerde, heeft de aap het niet overleefd. Laten we hopen dat het deze keer beter werkt.",
            "Ik had vanmorgen een V8 moeten hebben.",
            "Mijn andere laadscherm is veel sneller.",
            "Testen op Timmy... We hebben nog een Timmy nodig.",
            "Energiemotor herontdekken...",
            "(Kwartier invoegen)",
            "Zijn we er al?",
            "Ben je afgevallen?",
            "Tel maar tot 10",
            "Waarom zo serieus?",
            "Jij bent het niet, ik ben het.",
            "Terugtellen vanaf oneindig",
            "Geen paniek...",
            "Niet rennen! Wij zijn je vrienden!",
            "Kom je hier vaak?",
            "Waarschuwing: steek jezelf niet in brand.",
            "We maken een koekje voor je.",
            "Tijdlus-inversieveld maken",
            "Het rad van fortuin draaien...",
            "Het betoverde konijn laden...",
            "Kans op succes berekenen",
            "Op zoek naar exacte verandering",
            "Ik heb het gevoel dat ik iets moet laden...",
            "Aanpassen van fluxcondensator...",
            "Wacht alstublieft tot de luiaard begint te bewegen.",
            "Breek je scherm nog niet!",
            "Ik zweer dat het bijna klaar is.",
            "Laten we een minuutje mindfulness nemen...",
            "Eenhoorns zijn aan het einde van deze weg, dat beloof ik.",
            "Luisteren naar het geluid van één hand die klapt...",
            "Alle enen behouden en alle nullen verwijderen...",
            "De spinnenwebben opruimen...",
            "Zorgen dat alle i's stippen hebben...",
            "Neurotoxine-opslagtank aansluiten...",
            "Wensen inwilligen...",
            "Tijd vliegt als je plezier hebt.",
            "Koop koffie en kom over tien minuten terug...",
            "Het spinnen van de hamster...",
            "Blijf even en luister..",
            "AI overtuigen om niet kwaad te worden..",
            "Je linkerduim wijst naar rechts en je rechterduim wijst naar links.",
            "Hoe ben je hier gekomen?",
            "Wacht, ruik je iets dat brandt?",
            "Het geheim van het leven, het universum en alles berekenen.",
            "Als niets goed gaat, ga dan naar links!!...",
            "Ik hou alleen van mijn werk als ik op vakantie ben...",
            "Ik ben niet lui, ik ben gewoon relaxed!!",
            "Steel nooit. De overheid heeft een hekel aan concurrentie...",
            "Waarom heten ze appartementen als ze allemaal aan elkaar vast zitten?",
            "Het leven is kort - praat snel!!!!",
            "Optimisme - is een gebrek aan informatie.....",
            "Als ik de sleutel tot succes vind, verandert iemand het slot.",
            "Soms denk ik dat oorlog Gods manier is om ons aardrijkskunde te leren.",
            "Ik heb een probleem voor uw oplossing ...",
            "Waar een wil is, is een familielid.",
            "Gebruiker: het woord dat computerprofessionals gebruiken als ze !!idioot!! bedoelen",
            "Volwassenen zijn gewoon kinderen met geld.",
            "Ik denk dat ik ben, dus ik ben. Ik denk.",
            "Je betaalt geen belasting, zij innen belasting.",
            "Ik ben vrij van alle vooroordelen. Ik haat iedereen evenzeer.",
            "Bijkomende masten bouwen...",
            "Een paar zeeschildpadden strikken...",
            "Wij zijn niet aansprakelijk voor kapotte schermen als gevolg van wachten.",
            "Hallo IT, heb je geprobeerd het uit en weer aan te zetten?",
            "Als je Google intypt bij Google kun je het internet breken",
            "Nou, dit is genant.",
            "Wat is de luchtsnelheid van een onbeladen zwaluw?",
            "Hallo, IT... Heb je geprobeerd een onverwachte herstart te forceren?",
            "Ruimte is onzichtbaar geeststof, en sterren zijn slechts wensen.",
            "Ik wist niet dat verf zo snel droogde.",
            "Alles klinkt hetzelfde",
            "Ik ga de hond uitlaten",
            "Ik heb het technische leven niet gekozen. Het technische leven heeft mij gekozen.",
            "Delen door nul...",
            "Als ik binnen vijf minuten niet terug ben, wacht dan gewoon langer.",
            "Sommige dagen kom je gewoon niet van een bug af!",
            "We hebben een grotere boot nodig.",
            "Webontwikkelaars doen het met <style>",
            "Versleuteling van militaire kwaliteit kraken...",
            "Een handelsreiziger simuleren...",
            "Bewijzen P=NP...",
            "Verstrengeling van superstrings...",
            "Twippende duimen...",
            "Zoeken naar plotapparaat...",
            "Proberen te sorteren in O(n)...",
            "Lachen om je foto's - ik bedoel, laden...",
            "Gegevens verzenden naar NS - ik bedoel, onze servers.",
            "Op zoek naar gevoel voor humor, wacht even.",
            "Wacht even terwijl de stagiair zijn koffie bijvult.",
            "Een andere foutmelding? Eindelijk weer wat vooruitgang!",
            "Wacht even terwijl we onze koffie opwarmen",
            "Graag even geduld, we zetten deze bug om in een functie...",
            "Afhankelijkheden installeren",
            "Afgeleid door kattengifjes",
            "Iemand vinden om mijn bier vast te houden",
            "BRB, bezig met mijn zijproject",
            "@todo Voeg geestig laadbericht in",
            "Laten we hopen dat het het wachten waard is",
            "Afhankelijkheden bijwerken...",
            "Wat je ook doet, kijk niet achter je...",
            "Een ogenblik geduld... Raadpleeg de handleiding...",
            "Het is donker. Je wordt waarschijnlijk opgegeten door een grut.",
            "Grappig bericht aan het laden...",
            "In afwachting dat Daenerys al haar titels zegt...",
            "Voel je vrij om in je stoel te draaien",
            "Ga je gang, houd je adem in en doe een ironman plank tot het laden voltooid is",
            "Verveeld van langzaam ladende spinner? koop meer RAM!",
            "Help, ik zit vast in een lader!",
            "Een ogenblik geduld, terwijl we de Decepticons voor je opruimen. Ja, je kunt ons later bedanken!",
            "Wat bitcoins minen...",
            "Meer RAM downloaden..",
            "Bijwerken naar Windows Vista...",
            "De map System32 verwijderen",
            "Alt-F4 versnelt dingen.",
            "Initializer initialiseren...",
            "Wanneer heb je hier voor het laatst gestofzuigd?",
            "Optimaliseren van de optimizer...",
            "Laatste oproep voor de databus! Allemaal aan boord!",
            "Running swag sticker detectie...",
            "Laat een computer nooit weten dat je haast hebt.",
            "Een computer zal doen wat je hem zegt te doen, maar dat kan heel anders zijn dan wat je in gedachten had.",
            "Sommige dingen waren nooit bedoeld om te weten. Voor al het andere is er Google.",
            "Kolen in de server scheppen",
            "Pixels duwen...",
            "Wat dacht je van dit weer, hè?",
            "Een muur bouwen...",
            "Alles in dit universum is een aardappel of geen aardappel",
            "De ernst van uw probleem is altijd lager dan u had verwacht.",
            "Updater updaten...",
            "Downloader downloaden...",
            "Debugger debuggen...",
            "Algemene voorwaarden voor u lezen.",
            "Verteerde koekjes worden weer gebakken.",
            "Leef lang en bloei.",
            "Rennen met een schaar...",
            "Absoluut geen virus...",
            "Je mag me Jasper noemen.",
            "Je lijkt me een aardig persoon...",
            "Koffie bij mij in de cloud, morgen om 10 uur - kom niet te laat!",
            "Werk werk...",
            "Geduld! Dit is moeilijk, weet je...",
            "Nieuwe manieren ontdekken om u te laten wachten...",
            "Uw tijd is erg belangrijk voor ons. Even geduld a.u.b. terwijl we u negeren...",
            "De tijd vliegt als een pijl; fruit vliegt als een banaan",
            "Twee mannen liepen een bar binnen; de derde dook weg...",
            "Zooooo... Heb je mijn vakantiefoto's al gezien?",
            "Sorry we zijn druk bezig ze allemaal te vangen, we zijn snel klaar",
            "TODO: Liftmuziek invoegen",
            "Nog steeds sneller dan Windows-update",
            "Wacht even terwijl de minions hun werk doen",
            "Extra minions pakken",
            "Het zware werk doen",
            "We werken heel hard .... Echt",
            "De volgelingen wakker maken",
            "Je bent nummer 2843684714 in de wachtrij",
            "Een ogenblik geduld a.u.b. terwijl we andere klanten bedienen...",
            "Eenhoorns voeren...",
            "Accio pixels!",
        ];

        return $loadingMessages[array_rand($loadingMessages)];
    }
}
