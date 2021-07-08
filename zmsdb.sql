-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2021 a las 22:00:40
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zmsdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8989898989, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-12-30 21:38:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblanimal`
--

CREATE TABLE `tblanimal` (
  `ID` int(10) NOT NULL,
  `AnimalName` varchar(200) DEFAULT NULL,
  `ScientificName` varchar(200) NOT NULL,
  `CageNumber` int(10) DEFAULT NULL,
  `FeedNumber` varchar(200) DEFAULT NULL,
  `Breed` varchar(200) DEFAULT NULL,
  `AnimalImage` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Feeding` text NOT NULL,
  `Reproduction` text NOT NULL,
  `SocialLife` text NOT NULL,
  `StateOfConservation` text NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblanimal`
--

INSERT INTO `tblanimal` (`ID`, `AnimalName`, `ScientificName`, `CageNumber`, `FeedNumber`, `Breed`, `AnimalImage`, `Description`, `Feeding`, `Reproduction`, `SocialLife`, `StateOfConservation`, `CreationDate`) VALUES
(1, 'GUACAMAYO ROJO', 'Ara macao', 123, 'A-1', 'Aves', '8c631981b4fa29f71e37e84d7851d93d1625757374.jpg', 'La cabeza y la mayor parte del cuerpo es de color rojo; gran zona facial desnuda alrededor del ojo de color blanco. El pico es blanquecino por encima y negruzco en la parte de abajo; las plumas cobertoras alares de color amarillo con la punta verde; las plumas remeras mayormente azuladas, en la parte de abajo rojizas; espalda, rabadilla y cobertoras de la cola azul pálido, las plumas timoneras de la cola de color rojo con la punta azul. ', 'Se alimenta de frutas,  semillas, hojas,  flores y corteza de árboles, en algunas zonas consumen piñas que aplastan con su potente pico.', 'La época de celo varía según las distintas zonas de su gran área de distribución, pero generalmente está comprendida entre los meses de Octubre y Abril. El emplazamiento del nido es una cavidad natural en el tronco de un árbol a una altura entre los 7 y 40 m.  La entrada tiene un diámetro de unos 60 cm.  La puesta consta entre 1 y 4 huevos que son incubados durante 24-28 días. El periodo de crianza por parte de los padres se extiende unas 14 semanas.', 'Normalmente durante le época de reproducción se les puede ver en parejas, fuera de ella se les  observa formando grupos familiares o bandadas de hasta treinta individuos.', 'Aunque globalmente no está amenazada su población dentro de su gran área de distribución,  sí es escaso en algunas zonas, donde podría desaparecer  en breve dada la gran presión por parte del hombre que destruye su hábitat, al mismo tiempo que los captura para el comercio ilegal dado el gran precio que alcanza en los mercados.', '2021-07-08 15:19:31'),
(2, 'PAVO REAL', 'Pavo cristatus', 124, 'A-2', 'Aves', '4a5de2f477359ec943939ae60b632e5b1625757610.png', 'Adorada por los hindúes como ave sagrada, fue declarada ave nacional en 1963. Cabeza y cuello son de color azul, suavizado por dos manchas blancas, una encima de los ojos y la otra debajo de ellos. En la cabeza lleva un copete de plumas muy finas, desflecadas en el extremo y con las puntas de color azul. El cuerpo es de color menos brillante, grisáceo con franjas pardas, siendo pardas también las alas y la parte inferior. Pero lo que más destaca de su aspecto es la cola, constituida por plumas rectrices extraordinariamente alargadas y muy vistosas, que simulan la cola, pues la verdadera cola se encuentra debajo y sirve de apoyo a las primeras. La hembra es de menor tamaño y menos vistosa, pues carece del brillante colorido del macho y de su extraordinario apéndice caudal.', 'Son aves predominantemente granívoras, aunque no desdeñan los frutos silvestres, gusanos e insectos. Incluso serpientes y ratones. Casi nunca se alejan mucho del agua, a la que acuden cada mañana para beber. La búsqueda del alimento la realizan al amanecer y al atardecer preferentemente.', 'El celo coincide con la primavera. Durante el periodo nupcial, el macho se une a varias hembras (de 2 a 5),  ejecutando espectaculares pavoneos consistentes en hacer la rueda: despliegan su enorme cola al tiempo que hinchan y bajan las alas, manteniendo la cabeza echada hacia atrás; vuelven la espalda a sus consortes y éstas se ven obligadas a correr hacia delante hasta tenderse ante él, momento en el que el macho pliega su cola y efectúa el acoplamiento. Tras el mismo, las pavas se apartan del grupo para dedicarse a la incubación y cría. Efectúan la puesta en un lugar oculto entre la vegetación, en oquedades de algún tronco de árbol e incluso aprovechan los nidos abandonados de aves de presa. Ponen de 3 a 5 huevos que son incubados durante 28 días. Ocultos al principio, bajo el plumaje de la hembra. Los pollos empiezan a corretear y trepar a los 14 días.', 'Viven como animales silvestres en agrupaciones pocos sociales, incluso con separación de sexos después del periodo de incubación y cría en agrupaciones de machos adultos o de hembras, acompañadas de los paveznos. Huyen del calor diurno, ocultándose en la jungla. Su vista y oído están muy desarrollados y reaccionan rápidamente ante cualquier molestia. Les gusta descansar sobre los árboles y suelen utilizar siempre los mismos lugares para alimentarse, tomar el sol o para realizar sus exhibiciones', 'Aunque en estado salvaje ha sido un animal muy perseguido sobre todo por la belleza de su plumaje, todavía se les puede encontrar por algunas zonas con relativa abundancia. Sus principales enemigos además del hombre han sido siempre los tigres y leopardos. Pero es sobre todo su utilización como animal de exorno lo que ha servido para que se encuentre extendido por todos los continentes en parques y jardines, considerándose ya como animal doméstico. Es frecuente en cautividad encontrar animales albinos.', '2021-07-08 15:20:10'),
(3, 'VICUÑA', 'Vicugna vicugna', 125, 'A-3', 'Mamíferos', 'f517fce39d3685d44a8c443992abc97c1625757735.jpg', 'Camélido de cuello muy largo y de cabeza pequeña. Sus orejas y ojos son prominentes y tiene una hendidura central en el labio superior. Su pelaje es finísimo siendo muy apreciado. Tienen largos y sedosos mechones de color blanco sucio que cuelgan del pecho y lo protegen del frío cuando se echa. El cuello lomo y los lados son de color café claro o canela; el vientre y el interior de los muslos son de color blanco.  Las extremidades son largas y el tercio anterior del cuerpo es más bajo que el posterior.', 'La vicuña se alimenta casi exclusivamente de pasto, prefiriendo las zonas ricas en agua. Prefieren gramíneas cortas y herbáceas y algunas plantas suculentas; raramente comen pastos duros, aunque sí líquenes.', 'El cortejo delas vicuñas es muy primitivo, el macho muy excitado, persigue a la hembra elegida hasta agotarla, la empuja, muerde y da la impresión de que la fuerza a la cópula. La cópula tiene lugar con la hembra en pie o arrodillada y en ocasiones, tumbada. La gestación dura unos 11 meses, las hembras crían todos los años y entran en celo nada mas parir. La única cría es capaz de andar casi nada mas nacer. Al año aproximadamente, los jóvenes machos son expulsados del rebaño y forman grupos de solteros.', 'La vicuña tiene su mundo por debajo de las nieves perpetuas de la Cordillera de los Andes (5.500 m) y siempre por debajo de los 3.600 m. Viven en rebaños dominados por un macho guía al que todos siguen y hasta 15 hembras. Cada manada habita un territorio de unas 40 hectáreas defendidas por el macho. Los machos jóvenes se unen en grupos de 20 a 50 individuos, esperando la oportunidad de ser el dueño del harén. Es de costumbres  sedentarias y diurnas.', 'En los primeros años de la década de los setenta, se estimó que solo en quince años la población habría sido reducida hasta en un noventa y seis por ciento de sus efectivos. Las medidas proteccionistas y proyectos de cría en cautividad esperan poder permitir a este bello animal superar la barrera de su extinción. Sus principales enemigos son el puma y el zorro y tras estos el hombre, el cual la ha cazado debido a la suavidad, belleza y valor de su pelo', '2021-07-08 15:22:15'),
(4, 'Tucán toco', 'Ramphastos toco', 126, 'A-5', 'Aves', 'd5f19ec65aba97b784fdcf06fd549acb1625757982.jpg', 'De acuerdo con la especie, el tucán puede medir de 29 a 63 centímetros de largo y pesar de 130 a 680 gramos. Por ejemplo, la especie de tucán más grande es el tucán toco, que llega a medir los 63 centímetros; y uno de los más pequeños es el tucancito verde, que mide de 33 a 36 centímetros de longitud.', 'El pico del tucán, pese a lo fuerte y potente que parece, poco le sirve como elemento de defensa o pelea pues es hueco y ligero. Más bien lo utiliza para pelar frutas y llegar a ellas en ramas lejanas.  Su dieta está compuesta básicamente por frutas tropicales pero no es un animal frugívoro  ya que también puede cazar insectos, lagartijas y huevos.', 'Es un animal monógamo. Un dato curioso reside en el hecho de que durante el cortejo es común que el macho y la hembra se ofrezcan alimento uno a otro, quizá en un intento por establecer vínculos más cercanos.  Una vez al año la hembra pone de 2 a 4 huevos en el nido, construido en huecos de los árboles. Ambos padres cuidan de los huevos. Cuando las crías salen del cascarón, están completamente desprovistas de plumaje y el pico es aún pequeño. Éste no alcanzará el tamaño definitivo hasta dentro unos meses.', 'Es una especie sedentaria que vive en una sola área durante toda su vida o gran parte de ella. No es un ave migratoria.  El promedio de vida del tucán en la naturaleza supera los 20 años. Gran parte del tiempo está sobre los árboles, desde donde es capaz de comunicarse al emitir  una especie de graznido para llamar a otro tucán. Vive en pareja o en bandadas de unos 6 miembros.', 'Este bello animal se encuentra en peligro y es constantemente amenazado no solo por sus depredadores naturales, sino por el hombre. De hecho, es éste su mayor amenaza al acabar con su hábitat natural y capturarlo para su venta como mascota exótica.  En la actualidad constituye un delito en algunos países tener en posesión a un tucán como mascota y comerciar con el ave.', '2021-07-08 15:26:22'),
(5, 'TORTUGA VERDE', 'CHELONIA MYDAS', 127, 'A-6', 'reptil', '062b05873e72b5e11a5f3455d6d69ee21625758207.jpg', 'Esta especie es una de las más grandes, pues mide de 71cm a 1.5 m de longitud y mantiene un  peso de 68-190 kg. La tortuga verde más grande que se ha registrado, alcanzó el asombroso peso de 395 kilos. Los machos son más grandes que las hembras. Sus cabezas son pequeñas a comparación de su cuerpo y sus aletas en forma de remo están perfectamente adaptadas para el nado.', 'Las tortugas verdes son herbívoras, ya que su dieta se basa principalmente en algas marinas y vegetación que crece en aguas de poca profundidad. La mayor parte de su tiempo lo invierte en su alimentación. También comen medusas, cangrejos, caracoles y gusanos.', 'Según estudios científicos, las tortugas verdes alcanzan la madurez sexual de los 20 a los 50 años.  El proceso de apareamiento es totalmente controlado por las hembras, pues los machos no pueden forzarlas hasta que ellas decidan en qué momento hacerlo. La cópula se lleva a cabo en el agua.  Cuando la hembra es fecundada, esta llega a las costas en busca de un sitio adecuado para cavar un hoyo en la arena que le servirá para la anidación de los huevos. Puede depositar entre 100 y 200 huevos y una vez terminado, ella misma se encarga de cubrirlos de arena para que no sean detectados por los depredadores. La hembra no protege esa cavidad, sino que regresa de nuevo al mar.', 'Todas las tortugas marinas migran. Las tortugas a veces viajan miles de millas entre áreas de alimentación más frescas y áreas de anidación cálidas. Una tortuga laúd fue rastreada por satélite viajando más de 12,000 millas durante 674 días desde su área de anidación en la playa Jamursba-Medi en Papua, Indonesia hasta las zonas de alimentación frente a Oregon. Los hábitats, la dieta y el número y la disposición de estos escudos son las principales formas de distinguir las diferentes especies de tortugas marinas.', 'El hombre es el principal responsable de la reducción de ejemplares de la tortuga verde, ya que comercializa ilegalmente sus huevos o las cazan cuando son adultas para obtener su piel, curtirla y utilizarla como cuero para la elaboración de bolsos y otros artículos.  La carne, grasa y cartílago de tortuga también es consumida, especialmente en China e Indonesia.', '2021-07-08 15:30:07'),
(6, 'JIRAFA DE ROTHSCHILD', 'Giraffa camelopardalis rothschildi', 128, 'A-7', 'Mamíferos', '04429ff54446f3ea038dd66cc62c64ed1625758390.jpg', '    Destacan por su largo cuello, miembros anteriores más largos que los posteriores, orejas puntiagudas. Posee crin desde la nuca hasta la cruz. Cola rematada por un penacho de color oscuro. Los cuernos frontales son cortos, cubiertos de piel y pelo. Tienen un cuerno central, que a veces es solo una protuberancia. A veces dos protuberancias muy pequeñas, con aspecto de cuernos en el occipucio.', '    Exclusivamente vegetariana, se alimentan ramoneando hojas, frutos de árboles como acacias y mimosas. Su cuello le permite ramonear a una altura de 6 m. Pasa la mayor parte del día y parte de la noche comiendo, especialmente al amanecer y al anochecer. Para beber extiende sus patas delanteras y se arrodilla en los codos.', '    Las hembras son sexualmente maduras a los 3 años y medio y los machos uno mas tarde y se reproducen hasta los 20. Se pueden reproducir en cualquier época del año. El período de gestación dura 457 días. Normalmente la hembra pare a una sola cría pero no es raro que se den los gemelos. La cría se puede mantener de pie  a los 20 minutos de nacer y mama a la hora; mide 2 metros de altura y pesa entre 30-40 kg. Seguirá amamantándose hasta los 13 meses y se quedará con su madre de 2 a 3 meses más.', '    Se mantienen activas al atardecer y por la mañana temprano descansando el resto del día. Tienen desarrollados los sentidos de la vista y del oído, pero tiene un escaso sentido del olfato. Su gran tamaño aumenta su rango de visión. Se defienden huyendo o manteniéndose en grupos protegiendo a las crías. Pueden golpear con su cabeza o cuello. Suelen ser solitarias o agruparse en pequeños grupos o en grupos a modo de guarderías, algunos adultos se quedan cuidado de las crías mientras otros van a alimentarse o a beber. Los viejos machos suelen ser solitarios, aunque los grupos no suelen tener mucha cohesión. Suelen ser fieles a un mismo territorio. Galopan a buena velocidad, 56 km./hora, adelantando las patas traseras sobre las delanteras lo que se denomina paso amblar.', 'La jirafa de Rothschild (Giraffa camelopardalis rothschildi)1 es una de las subespecies de jirafa en mayor peligro de extinción con sólo unos cientos de miembros en estado salvaje', '2021-07-08 15:33:10'),
(7, 'LÉMUR DE COLA ANILLADA', 'Lemur catta', 129, 'A-10', 'Mamíferos', 'ab7850cdc21a5bb9428b3149fd3771641625758532.jpg', '    Color gris más o menos parduzco.  La cara, cola y orejas presentan un dibujo característico blanquinegro. Partes inferiores desde gris clara a blanca. Cuando caminan llevan siempre la cola erguida. Esta cola presenta anillos transversales de color negro. Su cara es parecida a la de un zorro, debido a su hocico alargado y oscuro; las orejas son triangulares y de puntas redondeadas.', '    Es un animal vegetariano, y se alimente principalmente de frutos, si bien no desdeña ni las hojas, ni las flores, ni las cortezas de los árboles. Sacia su sed lamiendo y chupando el rocío y la lluvia y, también al comer frutos jugosos.', '    Las hembras del grupo llegan a la época de celo, todas al mismo tiempo. Los machos disputan violentos combates en el período de los apareamientos, es decir entre los meses de abril y junio. La jerarquía existente en el grupo no tiene la menor influencia en los apareamientos. Los combates están altamente ritualizados. Las hembras son fecundadas varias veces por uno o varios machos y estas permanecen de pié durante la fecundación. Después de aproximadamente cuatro meses y medio nace generalmente una cría, aunque excepcionalmente pueden ser dos.  Estas nacen con el pelaje completo y los ojos abiertos. Al poco de nacer trepan ya a los árboles, durante los primeros catorce días permanecen aferradas al vientre de la madre, para pasar después a la espalda. La lactancia dura unos seis meses, aunque son capaces de ingerir alimentos sólidos al mes del nacimiento. Con frecuencia las hembras se ayudan a cuidar de los pequeños incluso son adoptados en caso de fallecimiento de la madre. La madurez sexual se alcanza sobre el año y medio, pero las hembras son fecundadas a partir de los dos. Viven sobre 20 años en cautividad, algo menos en libertad.', '    Viven en grupos de 12 a 25 individuos, aunque en ocasiones se reunen hasta  50. Estos grupos ocupan  territorios muy grandes  que son marcados con una sustancia olorosa que segregan unas glándulas que poseen. Los machos gritan al unísono para advertir a otros grupos la posesión del territorio. De toda forma es bastante tolerante con sus vecinos e incuso forma grupos mixtos con otras especies de lémures. Estos grupos están jerarquizados sobre todo entre los machos. Con frecuencia se pueden ver tomando baños de sol con los brazos extendidos. Para dormir suben a lo más alto de los árboles.', '    A pesar de la alta densidad local de sus poblaciones, se encuentran como todos los lémures amenazado de extinción sobre todo por la presión humana, que hace que la selva esté desapareciendo.', '2021-07-08 15:35:32'),
(8, 'Zorro costeño', 'Lycalopex sechurae', 130, 'A-30', 'Mamíferos', '5a7b2742de39b88358b514693e47408b1625766716.jpg', 'El zorro de Sechura, llamado también zorro del desierto peruano, zorro sechurano, o lobo de la costa, es una especie del género Lycalopex y es el más pequeño de los zorros sudamericanos', 'Gran cantidad de vegetales en su dieta, principalmente frutos, pero que aumenta considerablemente su consumo de vertebrados cuando éstos están disponibles, como roedores, reptiles, aves, insectos, escorpiones, peces, crustáceos y carroña.', 'Durante los casi dos meses que dura la gestación del zorro, la hembra permanece oculta dentro de la madriguera y el macho se encarga de su sustento.', 'Es nocturna, y se pasa las horas del día en una cueva excavada en el suelo. Es generalmente solitaria, aunque de vez en cuando visto viajar en parejas. Las crías nacen en octubre y noviembre, aunque poco más se sabe de su comportamiento reproductivo.', 'Casi amenazado', '2021-07-08 17:51:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'Sobre Nosotros', '<div><font color=\"#252525\" face=\"Roboto, arial, sans-serif\"><span style=\"font-size: 18px;\">El Zoológico Huachipa es una institución cultural y unidad de conservación de fauna y flora silvestre, que se localiza en el distrito de Ate Vitarte, en el margen izquierdo del río Rímac.&nbsp;En el Perú, son pocas las instituciones con características como las de nuestro zoológico, que permitan el estudio de las especies silvestres ex situ. Nuestra colección zoológica ha reunido diferentes especies de nuestra flora y fauna, y su principal objetivo es promover acciones a favor de la conservación de la naturaleza y su biodiversidad.</span></font><br></div>', NULL, NULL, '2021-07-08 19:47:06'),
(2, 'contactus', 'Contáctanos', '<font color=\"#000000\">Avenida Las Torres Sin Numero, Ate</font><br>', 'zooinfo@zoohuachipa.com.pe', 995569067, '2021-07-08 19:46:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblticforeigner`
--

CREATE TABLE `tblticforeigner` (
  `ID` int(10) NOT NULL,
  `TicketID` varchar(200) DEFAULT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblticforeigner`
--

INSERT INTO `tblticforeigner` (`ID`, `TicketID`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`) VALUES
(1, '103618900', 2, 1, '1000', '800', '2019-12-30 12:05:44'),
(2, '886489653', 8, 0, '1000', '800', '2019-12-30 12:06:05'),
(3, '671028076', 5, 2, '1000', '800', '2019-12-30 12:06:26'),
(4, '776418013', 5, 2, '1000', '800', '2019-12-30 12:09:33'),
(5, '542608571', 7, 7, '1000', '800', '2019-12-31 06:20:55'),
(6, '535130983', 4, 2, '1000', '800', '2019-12-31 06:21:06'),
(7, '554656170', 2, 1, '1100', '800', '2019-12-31 16:05:56'),
(8, '158113815', 5, 4, '1100', '800', '2019-12-31 16:11:38'),
(9, '298579816', 10, 4, '1100', '800', '2020-08-04 05:24:38'),
(10, '559449246', 10, 2, '1100', '800', '2020-08-05 11:32:40'),
(11, '330569887', 4, 2, '1100', '800', '2020-08-12 02:58:39'),
(12, '201101281', 2, 7, '1100', '800', '2021-07-07 02:21:34'),
(13, '363128690', 5, 2, '1100', '800', '2021-07-07 21:18:52'),
(14, '946150590', 1, 2, '1100', '800', '2021-07-07 22:35:10'),
(15, '318269484', 3, 10, '1100', '800', '2021-07-08 15:37:56'),
(16, '520490646', 1, 5, '1100', '800', '2021-07-08 15:38:53'),
(17, '365308243', 1, 7, '1100', '800', '2021-07-08 15:39:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblticindian`
--

CREATE TABLE `tblticindian` (
  `ID` int(10) NOT NULL,
  `TicketID` varchar(100) NOT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblticindian`
--

INSERT INTO `tblticindian` (`ID`, `TicketID`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`) VALUES
(1, '340973208', 5, 3, '200', '100', '2019-12-30 08:04:11'),
(2, '340973207', 8, 6, '200', '100', '2019-12-31 11:08:33'),
(3, '340973206', 4, 4, '200', '100', '2019-12-31 11:15:05'),
(4, '222133961', 6, 2, '200', '100', '2019-12-31 11:21:21'),
(5, '325226844', 2, 1, '', '', '2019-12-31 16:02:58'),
(6, '646984509', 4, 2, '250', '100', '2019-12-31 16:05:29'),
(7, '940539604', 4, 2, '200', '80', '2019-12-31 16:11:13'),
(8, '528090550', 5, 3, '300', '80', '2020-08-04 05:15:17'),
(9, '486218236', 8, 2, '300', '80', '2020-08-05 11:32:27'),
(10, '220366795', 2, 1, '350', '80', '2020-08-12 02:57:57'),
(11, '766485352', 2, 3, '350', '80', '2021-07-03 20:22:17'),
(12, '600331303', 2, 3, '350', '80', '2021-07-07 02:21:19'),
(13, '554017788', 3, 4, '350', '80', '2021-07-07 21:18:46'),
(14, '620749298', 1, 2, '350', '80', '2021-07-08 15:09:01'),
(15, '405832548', 2, 5, '350', '80', '2021-07-08 15:37:50'),
(16, '702359352', 10, 1, '350', '80', '2021-07-08 15:43:24'),
(17, '932566716', 4, 1, '50', '30', '2021-07-08 19:37:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltickettype`
--

CREATE TABLE `tbltickettype` (
  `ID` int(10) NOT NULL,
  `TicketType` varchar(200) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbltickettype`
--

INSERT INTO `tbltickettype` (`ID`, `TicketType`, `Price`, `CreationDate`) VALUES
(1, 'Normal Adult', '50', '2019-12-30 06:31:56'),
(2, 'Normal Child', '30', '2019-12-30 06:32:27'),
(3, 'Foreigner Adult', '100', '2019-12-30 06:33:16'),
(4, 'Foreigner Child', '50', '2019-12-30 06:33:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblticforeigner`
--
ALTER TABLE `tblticforeigner`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `TicketID` (`TicketID`),
  ADD KEY `TicketID_2` (`TicketID`);

--
-- Indices de la tabla `tblticindian`
--
ALTER TABLE `tblticindian`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TicketID` (`TicketID`);

--
-- Indices de la tabla `tbltickettype`
--
ALTER TABLE `tbltickettype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TicketType` (`TicketType`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblanimal`
--
ALTER TABLE `tblanimal`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblticforeigner`
--
ALTER TABLE `tblticforeigner`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tblticindian`
--
ALTER TABLE `tblticindian`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tbltickettype`
--
ALTER TABLE `tbltickettype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
