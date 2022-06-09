Alustuseks tegin wp-content-->themes alla kausta.

Siis tegin baasfailid Moodle info järgi ja siis aktiveerisin loodud teema.

Eksami juhendi järgi tegin pildi lisamise funktsionaalsuse: https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

Tegin esimese katsepostituse ja proovin seda kuvada eraldi kastina pealehel tõstes postitus div'i sisse. Sellega tekkis palju probleeme kuna stiil miskipärast ei mõjunud tervele div'ile kohe.
Probleemi lahendamiseks tõstsin the_post()'i div'i sisse.

Määrasin div'ile klassi abil maksimum suuruse, taustavärvid ja ilusad nurgad.

Igale postitusele said oma "Custom Fields"'id ja panin need tööle.
Custom field võtmeteks said "amet" & "e-mail".

Lisasin ettevõtte kohta nõuded jalusesse.

Leidsin hea lingi ja proovin tööle saada mitu postitust kõrvuti, aga ei tahtnud õnnestuda. 
Link: https://www.freecodecamp.org/news/how-to-make-your-html-responsive-by-adding-a-single-line-of-css-2a62de81e431/

Muutsin default stiilid ära.
Lõpetuseks Exportisin kõik postitused. 
Postitused saab tagasi importida wp-admin vaates. Enne tuleb ka "Blogger" importer installida.
Tools-->Import. 
Postituste fail: https://github.com/CptTheYe/Eksam-2022.06.09/blob/main/pealeht.WordPress.2022-06-09.xml
