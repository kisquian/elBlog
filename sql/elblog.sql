-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2015 a las 16:08:54
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `idPost` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `comment` text COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `idPost`, `name`, `email`, `comment`, `status`) VALUES
(6, 1, 'Juan', 'kisquian-1991@hotmail.com', 'Hola a todos, la verdad que el blog está buenisimo sigan asi', 1),
(7, 1, 'Sesar', 'asda@asdad.com', 'Gracias por todo paco casal', 1),
(8, 1, 'asad', 'asda@asdad.com', 'Chorro! te robaste todo', 0),
(9, 2, 'Juan', 'Casta@asa.com', 'Mucho palo pa que aprenda', 1),
(10, 2, 'Cacho', 'Casta@asa.com', 'No puede ser que sucedan este tipo de cosas en el país, una cosa de loco', 1),
(11, 3, 'carlos', 'ttaaayy@mail.com', 'Tremendo, muchas gracias por compartir. Saludos desde El cerro', 1),
(12, 4, 'Cacho', 'kisquian-1991@hotmail.com', 'Está de mas, muy bien uruguay!! Gracias por el espacio. Salu2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `countComments` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `status`, `countComments`, `img`) VALUES
(1, 'La orden franciscana', 'Francisco Paco Casal declara hoy ante la Justicia como testigo de la causa que investiga corrupción en la Conmebol. Esta semana también lo hará Nelson &#34;Tano&#34; Gutiérrez.&#13;&#10;&#13;&#10;Prosigue en nuestro país la causa por corrupción en la Conmebol presentada por la Mutual de Futbolistas Profesionales en diciembre del 2013. Además de la Mutual, la denuncia fue presentada originalmente por varios clubes (incluyendo Peñarol), que se bajaron de la demanda por temor a sufrir represalias por parte de la Confederación Sudamericana de Fútbol.&#13;&#10;&#13;&#10;Según la denuncia original, la Conmebol perjudicó a la empresa de Francisco Casal en la adjudicación de derechos televisivos, al no considerar su oferta para la transmisión de todos los partidos organizados por la institución entre 2015-2018. Según lo denunciado, la empresa Global Sports ofreció 170 millones de dólares, una cifra superior a la entregada por Fox Sports, quien resultó ganadora. Además se acusa a la organización de irregularidades en sus balances.', 1, 0, '366926_4919a0769c6da78d412be3c63b9009a4.jpg'),
(2, 'Hay palos que siempre dicen que no', 'El auto de procesamiento de los cinco participantes en los disturbios del Codicen dice que los imputados agredieron verbal y físicamente a la Policía y a otros manifestantes.&#13;&#10;&#13;&#10;Este martes se conoció el fallo judicial que dictaminó el procesamiento sin prisión de J. A. O. M., F. B. M., L. C. D., A. W., y L. M. H., por su responsabilidad en los incidentes ocurridos en el desalojo de la sede del Codicen. A los imputados se les tipificó el delito de atentado agravado, y se les impuso como medida sustitutiva la realización de 200 horas de trabajos comunitarios.&#13;&#10;&#13;&#10;El fallo judicial expresa que, en oportunidad de la ocupación de la sede del Codicen, y ante la orden de desalojo, &#34;diversos manifestantes se encontraban fuera del edificio y en la puerta de ingreso. Funcionarios policiales pertenecientes al Grupo de Respuesta Táctica (GRT) por orden administrativa, ingresan al edificio con llave apropiada, por una puerta lateral a la cual se accede desde el estacionamiento. Está despejado y llegan a una puerta de vidrio, que está trancada. Intentan destrabarla, no lo consiguen y proceden a romperla. El sonido de los vidrios alerta a los ocupantes y manifestantes que se hallaban en el hall del inmueble, del ingreso de los funcionarios. Es así que los primeros bajan del piso en que se encontraban y evacúan el edificio, por otra puerta lateral sita sobre la calle Colonia&#34;.', 1, 0, '524590_772f06c1e3ea2dfabfc4bebe0f308846.jpg'),
(3, 'Una calle me separa', 'Este miércoles se habilitará la calzada oeste de Bulevar Artigas, entre Antonio Machado y Yaguarí. Permanecerá cerrado el cruce de Gallinal y Bulevar.&#13;&#10;&#13;&#10;La Intendencia de Montevideo informó que, desde la mañana del miércoles, quedará habilitada la calzada oeste de Bulevar Artigas, en el tramo comprendido entre Antonio Machado y Yaguarí.&#13;&#10;&#13;&#10;Se encenderán todos los semáforos de Bulevar Artigas y Gallinal para permitir el cruce peatonal y la entrada o salida de vehículos hacia Bulevar Artigas, y el cruce de Gallinal con Bulevar Artigas quedará cerrado, con el fin de construir el pavimento de hormigón en la zona del cantero.', 1, 0, '525662_a02ca03f778a7a166dd11387c4bb5aeb.jpg'),
(4, 'Boleto verde', 'Con la presencia del intendente Daniel Martínez, la empresa Coetc presentó sus nuevos ómnibus ecológicos.&#13;&#10;El intendente Daniel Martínez asistió a la presentación de nuevos ómnibus incorporados por la empresa Coetc, acto que se realizó en la explanada del Palacio Municipal.&#13;&#10;&#13;&#10;Se trata de unidades Volvo Svelto Euro V equipadas con motores dotados de avanzada tecnología ecológica.&#13;&#10;&#13;&#10;Los ómnibus, que operarán con conductor-cobrador, tienen capacidad para 100 personas, 35 sentadas y 65 paradas. Coetc ya recibió 21 de las 89 unidades que adquirió en Brasil y las restantes llegarán en la primera quincena de octubre. El costo por unidad es de US$ 145.000.', 0, 0, '525531_3e4ce15d9c1e7cdfb8cda1dffd357d87.jpg'),
(6, 'Ha lugar', 'La jueza Ana de Salterain decidió el procesamiento sin prisión de cinco personas por los incidentes ocurridos en el Codicen. La magistrada les imputó el delito de “atentado agravado” y dispuso que deberán cumplir 200 horas de trabajos comunitarios.&#13;&#10;La jueza Ana de Salterain decidió el procesamiento sin prisión para cinco personas por los incidentes ocurridos en el Codicen la semana pasada. La magistrada imputó a los cinco el delito de &#34;atentado agravado&#34;.&#13;&#10;&#13;&#10;Según informó el Poder Judicial, los procesados sin prisión son L. H., A. W., L. C. B., F. B. y J. A. O. Los otros dos acusados por la fiscal, I. L. y P. G., se mantienen como indagados a la espera de un fallo sobre ellos.&#13;&#10;&#13;&#10;Los cinco procesados deberán cumplir trabajos comunitarios por el lapso de 200 horas, coordinadas por la Oficina de Supervisión de la Libertad Asistida, del Instituto Nacional de Rehabilitación.', 1, 0, '524316_fb2a36fba29707743e0ac064f05a8866.jpg'),
(7, 'Poniendo estaba la gansa', 'La empresa Full Play tiene cuatro días para pagar la deuda que mantiene con la AUF por los derechos de televisación de las Eliminatorias. Fallo judicial&#13;&#10;Este lunes, la Justicia aceptó las garantías presentadas por Full Play para mantener su contrato con la Asociación Uruguaya de Fútbol por los derechos de televisación de las Eliminatorias.&#13;&#10;&#13;&#10;La empresa, que pactó el pago de seis millones de dólares por los partidos de Uruguay como visitante y que cedió a la AUF los derechos de los otros 81 cotejos de las Eliminatorias (que la AUF vendió a Tenfield por 12 millones) presentó las garantías de pagos por 1.750.000 dólares el pasado jueves ante el juzgado de la causa civil de 20.º turno, y este lunes el juez Guzmán López Montemurro las aceptó, dando lugar al recurso de &#34;no innovar&#34; expuesto por los abogados Diego Puceiro y Adriana Pisano para mantener el vínculo.', 1, 0, '334096_035566002964fafe47a87d401d47b026.jpg'),
(8, 'Hay derechos', 'Hace 25 años, Uruguay ratificaba la Convención sobre los Derechos del Niño. Unicef destacó los logros obtenidos y llamó a alcanzar retos pendientes.&#13;&#10;El 20 de noviembre de 1989 la Asamblea General de Naciones Unidas aprobó la Convención sobre los Derechos del Niño (CDN). El 28 de setiembre de 1990, Uruguay ratificó este tratado que consagra los derechos de niños y adolescentes.&#13;&#10;&#13;&#10;&#34;Hoy se cumplen 25 años de que el país, mediante ese acto, se comprometió a adaptar la legislación interna, modificar las políticas públicas sociales, revisar los presupuestos destinados a la infancia y adoptar las medidas necesarias para asegurar que las normas fijadas en la Convención sean efectivas&#34;, destacó Unicef en un comunicado.', 1, 0, '525427_0553d51d92c94c9b6174df3d4a191b6a.jpg'),
(11, 'Los mejores', 'Luis Suárez, Edinson Cavani y Carlos Sánchez integran la lista preliminar de 59 futbolistas candidatos a ganar el Balón de Oro de la FIFA. La lista se irá depurando y el ganador se conocerá el próximo 11 de enero.&#13;&#10;Este viernes se conoció la lista preliminar de 59 jugadores candidatos al Balón de Oro de la FIFA, premio que se conocerá el próximo 11 de enero.&#13;&#10;&#13;&#10;En la nómina hay tres jugadores uruguayos: Luis Suárez, Edinson Cavani y el volante de River Plate Carlos Sánchez. Argentina lidera la lista por países con seis futbolistas: Sergio Agüero, Javier Mascherano, Lionel Messi, Lucas Otamendi, Javier Pastore y Carlos Tévez.', 1, 0, '483300_74729e4af56a9c5b2a83f828f0b3a52f.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscrbite`
--

CREATE TABLE IF NOT EXISTS `suscrbite` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `suscrbite`
--

INSERT INTO `suscrbite` (`id`, `email`) VALUES
(0, 'CHECHE@mail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `hash`, `email`) VALUES
(27, 'carlos', '0b4a7db11aaab6d963f000655d26bf3f', 'fbd2d8498b2f463f4a6a69f62ac91806', 'ttaaayy@mail.com'),
(28, 'juancho', 'ba8381ff37c64b5c40406ab2d840371a', 'b3f2f566d950ac4d407f88e56d1170a8', 'juancho@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscrbite`
--
ALTER TABLE `suscrbite`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
