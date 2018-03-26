# vindecoder


Analyse VIN-Decoder API:
https://vindecoder.eu/api
Implement into Web Application
patrick.riegler@ripro-consulting.com
pw short 1



ok:                            WDD2210561A233135
not ok:                      WDD2210561A233315
completely wrong:    WDZ2210561A233315

use case 1:
is the VIN valid

use case 2:
does the vehicle exist?

use case 3:
can we get back to a HSN/TSN number



docker build -t vindecode . && docker run -it --rm --name vindecode-app vindecode
docker run -it --env VIN=WDD2210561A233135 --env GET=1 --rm --name vindecode-app vindecode > tmp/WDD2210561A233135.get



code is here:
https://github.com/PatrickRiegler/vindecoder



