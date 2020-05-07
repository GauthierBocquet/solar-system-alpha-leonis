delete  from PLANETE;
#Sun
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Soleil",1988500,391400,1408,274.0,617.6,609.1,null,null,null,null,null,'#soleil#sun#solaire#etoile');

#Mercury
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Mercure",0.330,4879,5427,3.7,4.3,1407.6,4222.6,57.9,167,0,0,'#mercure#mercury#solaire#planete');

#Venus
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Venus",4.87,12104,5243,8.9,10.4,-5832.5,2802,108.2,464,92,0,'#venus#planete#solaire');

#Earth
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Terre",5.97,12756,5514,9.8,11.2,23.9,24,149.6,15,1,1,'#terre#planete#solaire#bleu');

#Moon
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Lune",0.073,3475,3340,1.6,2.4,655.7,708.7,149.6,-20,0,0,'#lune#satellite#terre#solaire');

#Mars
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Mars",0.642,6792,3933,3.7,5.0,24.6,24.7,227.9,-65,0.01,2,'#mars#planete#solaire');

#Jupiter
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Jupiter",1898,142984,1326,23.1,59.5,9.9,9.9,778.6,-110,null,67,'#jupiter#planete#solaire');

#Saturne
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Saturne",568,120536,687,9.0,35.5,10.7,10.7,1433.5,-140,null,62,'#saturne#planete#solaire');

#Uranus
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Uranus",86.8,51118,1271,8.7,21.3,-17.2,17.2,2872.5,-195,null,27,'#uranus#planete#solaire');

#Neptune
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Neptune",102,49528,1638,11.0,23.5,16.1,16.1,4495.1,-200,null,14,'#neptune#planete#solaire');

#Pluton
INSERT INTO `PLANETE`(`nom`, `mass`, `diameter`, `density`, `gravity`, `escapeVelocity`, `rotationPeriod`, `lengthDay`, `distanceFromSun`, `meanTemperature`, `surfacePressure`, `numberMoons`,tags)
VALUES ("Pluton",0.0146,2370,2095,0.7,1.3,-153.3,153.3,5906.4,-225,0,null,'#pluton#solaire');

commit;
