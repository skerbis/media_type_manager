# Media Type Manager Addon

Das Media Type Manager Addon soll helfen, einfach schnell und unkompliziert neue Mediamanager Typen für den REDAXO 5 Mediamanager anzulegen. 

## Warum?
Du willst den `<picture>` tag nutzen, und perfekt zugeschnittene Bilder in der source liefern? Musst im Mediamanager aber gefühlte hundert clicks machen? Zudem passieren dir diverse Rechnungs- und Tippfehler?
 
Mit diesem Addon kannst du breakpoints definieren und für diese (bis jetzt) breite und höhe angeben, diese werden dann auf retina Screens (bis jetzt nur x2) hochgerechnet und die angegebenen Effekte mit den darin definierten Settings für alle Typen gespeichert.

Lazyload und Picturefill werden mitgeliefert. Wenn das useragent Addon installiert ist, wird der Picturefill nur bei IE eingebunden.

## Entwicklungsstadium
 Es gibt noch diverse bugs und viele funktionen die noch nicht implentiert sind wie z.B.:
 * Benutzerdefinierte typen funktionieren nicht richtig
 * Es können nur Breite und Höhe durch Breakpoint überschrieben werden
 * media queries für alle typen, nicht pro typ
 
 Freue mich auf jedes Feedback
 