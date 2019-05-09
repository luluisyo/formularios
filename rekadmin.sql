-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2019 a las 18:24:18
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rekadmin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cumplido`
--

CREATE TABLE `cumplido` (
  `id_cum` int(11) NOT NULL,
  `nro_req` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `area_of` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `detalle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ref` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `presu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `costo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `resp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cuadro` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_entregado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `enviado` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `confir` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `proveedor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diseno` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `obs` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `modalidad` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cuentacon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `estadocon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cumplido`
--

INSERT INTO `cumplido` (`id_cum`, `nro_req`, `fecha_entrega`, `area_of`, `detalle`, `ref`, `presu`, `costo`, `resp`, `estado`, `cuadro`, `fecha_entregado`, `enviado`, `confir`, `proveedor`, `diseno`, `obs`, `modalidad`, `cuentacon`, `estadocon`) VALUES
(1, '002/2018', '2018-01-31', 'RRHH', 'Tarjetas Personales', 'N/A', 'SI', '90', 'Alejandra Ticona', 'CERRADO', '1518623835tutorial.jpg', '', 'N/A', 'Se cumplio con el requerimiento', 'STIGMA', '', 'Entregado a RRHH', 'directo', 'SI', 'listo'),
(2, '003/2018', '2018-02-01', 'Area de TI', 'Fuente de Poder para servidor HP Proliant ', 'N/A', 'SI', '7000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', 'N/A', 'Entregado a T.I.', '', 'NO', 'Aun no'),
(3, '004/2018', '2018-02-01', 'Area de TI', 'RenovaciÃ³n Solarwinds', 'N/A', 'SI', '65233.08', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', 'N/A', 'Entregado a T.I.', '', 'NO', 'No Aplica'),
(4, '006/2018', '2018-02-01', 'Recursos Humanos', 'Tarjetas Personales', 'N/A', 'SI', '180', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', 'Entregado a RRHH', 'InvitaciÃ³n Directa', 'SI', 'No Aplica'),
(5, '011/2018', '2018-02-16', 'EducaciÃ³n', 'Quemado y Serigrafiado de CD difusiÃ³n taller', 'N/A', 'SI', '2200', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'SURGIR', '', 'Entregado al Ã¡rea de educaciÃ³n', '', 'NO', 'Aun no'),
(6, '012/2018', '2018-02-14', 'Riesgos', 'Compra de silla giratoria', 'N/A', 'NO', '1400', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'STRATOS', '', '', '', 'NO', ''),
(7, '013/2018', '2018-02-14', 'EducaciÃ³n', 'Chanchitos alcancia 2000 piezas', 'N/A', 'SI', '25600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', '', '', 'NO', ''),
(8, '009/2018', '2018-02-07', 'AdministraciÃ³n', 'Sala de Reuniones cable HDMI', 'N/A', 'NO', '150', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', 'Se realizo la instalaciÃ³n del cable HDMI en sala Warmi', '', 'NO', 'Aun no'),
(9, '014/2018', '2018-02-26', 'Recursos Humanos', 'Cinta Evolis YMCKO Ribbon Colores de 5 paneles', 'N/A', 'SI', '1600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', '', '', 'NO', 'Aun no'),
(10, '016/2018', '2018-02-27', 'EducaciÃ³n', 'AudÃ­fonos para Maritza LeÃ³n', 'N/A', 'NO', '280', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', '', '', 'NO', 'No Aplica'),
(11, '017/2018', '2018-02-27', 'EducaciÃ³n', 'Bolsa cajÃ³n tela galleta', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', '', '', 'NO', 'Aun no'),
(12, '018/2018', '2018-03-05', 'Seguridad', 'Chapas para mÃ³dulos de caja', 'N/A', 'NO', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', '', '', 'NO', 'Aun no'),
(13, '020/2018', '2018-03-05', 'Finanzas', 'Servicio de CalificaciÃ³n de Riesgos', 'N/A', 'NO', '69600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', 'Pago total', '', 'NO', 'Aun no'),
(14, '022/2018', '2018-03-05', 'EducaciÃ³n', 'Gorra con tapa protectora para el sol, bloqueador solar', 'N/A', 'SI', '3600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', '', '', 'NO', 'Aun no'),
(15, '026/2018', '2018-03-12', 'EducaciÃ³n', 'Compra de toner de color', 'N/A', 'SI', '2223', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'entrega al area de educacion', '', 'NO', 'No Aplica'),
(16, '027/2018', '2018-03-13', 'Riesgos', 'ReasignaciÃ³n de computadora', 'N/A', 'NO', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'Aun no'),
(17, '028/2018', '2018-03-13', 'Finanzas', 'PublicaciÃ³n de Estados FInancieros', 'N/A', 'SI', '13243', 'Gina Escobar', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'No Aplica'),
(18, '030/2018', '2018-03-15', 'Area de TI', 'Memoria Ram para Portatil Dell Inspiron 5567', 'N/A', 'NO', '930', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'No Aplica'),
(19, '031/2018', '2018-03-19', 'EducaciÃ³n', 'Servicio Plataforma Powtoon', 'N/A', 'NO', '1948.8', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Finanzas realizo el pago', '', 'NO', 'Aun no'),
(20, '032/2018', '2018-03-19', 'EducaciÃ³n', 'Disco Duro Externo de 2TB Pendrive Flash de 16GB', 'N/A', 'NO', '1165', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Entregado al Ã¡rea de educaciÃ³n', '', 'NO', 'Aun no'),
(21, '033/2018', '2018-03-20', 'Area de TI', 'Computadora de Escritorio Dell 5 u.', 'N/A', 'SI', '39970', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Entregado a T.I.', '', 'NO', 'Aun no'),
(22, '36/2018', '2018-04-09', 'Servicios Financieros', 'computadora portatil i7 16GB', 'N/A', 'NO', '8980', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'N/A'),
(23, '40/2018', '2018-04-16', 'EducaciÃ³n', 'Bolsas planas, individuales color rojo', 'N/A', 'SI', '4800', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Entregado al Ã¡rea de educaciÃ³n', '', 'NO', 'Aun no'),
(24, '47/2018', '2018-04-30', 'Area de TI', 'Memoria Ram 8GB para PC Dell Vostro 3268', 'N/A', 'SI', '1890', 'Alejandra Ticona', 'CERRADO', '', '', '', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Entregado a T.I.', '', 'NO', 'Aun no'),
(25, '43/2018', '2018-04-19', 'EducaciÃ³n', 'Bolsa tela galleta neceser', 'N/A', 'SI', '30000', 'Alejandra Ticona', 'CERRADO', '', '', '', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'Aun no'),
(26, '48/2018', '2018-05-03', 'Marketing y Comunicaciones', 'Trofeos, Certificados, Banners, Pelotas, Botones, Monederos, Lona para Roller, vales de supermercado', 'N/A', 'SI', '15005', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Entregado a Marketing y enviado a las regionales', '', 'NO', 'Aun no'),
(27, '51/2018', '2018-05-07', 'Recursos Humanos', 'Impresora de Credenciales ', 'N/A', 'NO', '12268', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No aun'),
(28, '52/2018', '2018-05-07', 'Recursos Humanos', 'Compra libros de Ingles ', 'N/A', 'NO', '7000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(29, '53/2018', '2018-05-10', 'Proyectos', 'Silla Giratoria para Romina Gerrero', 'N/A', 'NO', '1690', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'N/A'),
(30, '54/2018', '2018-05-07', 'Area de TI', 'Blu Ray para backup', 'N/A', 'NO', '4200', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'N/A'),
(31, '001/2018', '2018-01-02', 'Control de Proyectos', 'Servicio anual de calificaciÃ³n de desempeÃ±o RSE', 'N/A', 'SI', '45240.00', 'Gina Escobar', 'CERRADO', '1516025299error.jpg', '', '', 'Se cumplio con el requerimiento', 'MICROFINANZAS RATING', 'N/A', 'Pago total', '', '', ''),
(32, '029/2018', '2018-03-15', 'EducaciÃ³n', 'Llavero acrÃ­lico o goma pvc', 'N/A', 'SI', '64500', 'Alejandra Ticona', 'CERRADO', '', '2018-03-27', '', 'Se cumplio con el requerimiento', 'STRATOS', '27/03/2018', 'Pago total', '', 'NO', 'Aun no'),
(33, '007/2018', '2018-02-05', 'Riesgos', 'Computadora portatil Dell Intel 7ma generaciÃ³n', 'N/A', 'NO', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', 'Se cancelo la compra por que ya se disponia de una computadora portatil en T.I.', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(34, '015/2018', '2018-02-27', 'Area de TI', 'ContrataciÃ³n de servicio de enlace de datos para Oficina de Guayaramerin VPN/MPLS', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', '', '', 'NO', ''),
(35, '021/2018', '2018-03-05', 'EducaciÃ³n', 'mochila ecolÃ³gica, pulsera, boligrafo ', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'No definido', '', 'El Ã¡rea de educaciÃ³n cancelo el proceso de compra', '', 'NO', 'Aun no'),
(36, '35/2018', '2018-04-09', 'EducaciÃ³n', 'Mandil tela popelina, Ponchillo tela popelina', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'El Ã¡rea de educaciÃ³n cancelo el proceso', '', 'NO', 'Aun no'),
(37, '45/2018', '2018-04-19', 'EducaciÃ³n', 'mandil tela engomada', 'N/A', 'SI', '29050', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Proceso de pago final', '', 'NO', 'Aun no'),
(38, '58/2018', '2018-05-15', 'Marketing y Comunicaciones', 'Pago participaciÃ³n Feria del CrÃ©dito en Oruro', 'N/A', 'NO', '4000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', '', 'Directo', 'NO', 'No Aplica'),
(39, '59/2018', '2018-05-16', 'Marketing y Comunicaciones', 'pulseras, boligrafos, globos, tablets Feria de CrÃ©dito Oruro', 'N/A', 'NO', '12570', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'A'),
(40, '60/2018', '2018-05-22', '', 'SeÃ±aletica para CPD', 'N/A', 'NO', '60', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(41, '62/2018', '2018-05-10', 'Marketing y Comunicaciones', 'ImpresiÃ³n laminado de fotografias', 'N/A', 'NO', '10350', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(42, '63/2018', '2018-05-25', 'Recursos Humanos', 'compra libro Hector Careaga', 'N/A', 'NO', '304.35', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(43, '67/2018', '2018-06-13', 'Recursos Humanos', 'Curso Normativa ASFI 2da parte', 'N/A', 'SI', '9000', 'Alejandra Ticona', 'CERRADO', '', '2018-06-14', '2018-06-14', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', 'por excepciÃ³n', 'NO', 'No Aplica'),
(44, '70/2018', '2018-06-18', 'Marketing y Comunicaciones', 'Pago participaciÃ³n Feria del CrÃ©dito en Sucre', 'N/A', 'SI', '4000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'Aun no'),
(45, '77/2018', '2018-06-27', 'Proyectos', 'ElaboraciÃ³n de Balance Social', 'N/A', 'NO', '15000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Pagado', 'InvitaciÃ³n Directa', 'NO', 'Aun no'),
(46, '83/2018', '2018-07-04', 'Recursos Humanos', 'Tarjetas Personales Gerencia General', 'N/A', 'NO', '140', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Miguel Aramayo Ochoa', '', 'Entregado a RRHH y pagado con caja chica', '', 'NO', 'N/A'),
(47, '97/2018', '2018-08-07', 'AdministraciÃ³n', 'reparaciÃ³n camioneta Chevrolet en comodato Of Nacional ', 'N/A', 'SI', '0', 'Santiago Silva', 'CERRADO', '', '', '', 'Se cumplio con el requerimiento', 'No definido', 'N/A', 'Ya se realizaron estos arreglos', 'Directo', 'NO', 'N/A'),
(48, '98/2018', '2018-07-19', 'Legal', '3 escritorios (2 Ã¡rea legal, 1 marketing)', 'N/A', 'NO', '5400', 'Santiago Silva', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'SIEMPRE AMIGOS', 'N/A', '', 'Directo', 'NO', 'N/A'),
(49, '99/2018', '2018-08-03', 'AdministraciÃ³n', 'Traslado de areas, armado desarmado de muebles, cambio de chapas, reparaciÃ³n de muebles', 'N/A', 'SI', '870', 'Santiago Silva', 'CERRADO', '', '', '2018-08-03', 'Se cumplio con el requerimiento', 'SIEMPRE AMIGOS', 'N/A', '', 'Directo', 'NO', 'N/A'),
(50, '103/2018', '0018-02-20', 'EducaciÃ³n', 'ImpresiÃ³n regla Pro Mujer  1.500 u.', 'N/A', 'SI', '2800', 'Santiago Silva', 'CERRADO', '', '2018-09-05', '', 'Se cumplio con el requerimiento', 'ESCARLATA INDUSTRIA GRAFICA', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'N/A'),
(51, '170/2018', '2018-10-30', 'AdministraciÃ³n', 'Pizarra acrÃ­lica para nueva oficina', 'N/A', 'SI', '700', 'Juan Callisaya', 'CERRADO', '', '', 'N/A', 'Se cumplio con el requerimiento', 'Ofisoft', 'N/A', '', 'Directo', 'NO', 'No Aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_pro` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nro_cuenta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_pro`, `nombre`, `nit`, `direccion`, `email`, `contacto`, `telefono`, `archivo`, `nro_cuenta`) VALUES
(1, 'STRATOS', '171010022', 'Calle Rigoberto Paredes NÂ° 1401, Zona San Pedro', 'stratos_jsp@hotmail.com', 'Eddy Paola Arana Torre', '2482283 - 65101795 - 79534027 ', '15278582141 pago - Calificacion de DesempeÃ±o.pdf', ''),
(2, 'CASE', '171010022', 'Calle Illimani', 'cgladysangelica@hotmail.com', 'Martin Ayaviri', '0', '1516028104amverso.png', ''),
(3, 'TELIS', '', 'Calacoto Calle 24-B #10 Entre Av. Fuerza Naval y Av. Tomasa Murillo.      ', 'jose.valle@telis.com.bo', 'Jose Valle', '2795012 - 214-5580 - 71691651 - 72512834', '', ''),
(4, 'Miguel Aramayo Ochoa', '', '', '', '', '', '', ''),
(5, 'Angelica Chuquimia Solares', '4819859016', 'Calle Nestor Morales NÂ° 1385 Zona Villa Pabon', '', 'Angelica Chuquimia Solares', '73710868', '', '20151146183392'),
(6, 'ALPHA SYSTEMS S.R.L.', '1020469023', 'Av. 6 de Agosto NÂ° 2455 Edificio Hilda Piso 7, Zona Sopocachi', 'silvana.carpio@alphasys.com.bo', 'Silvana Carpio', '2189358', '', ''),
(7, 'BINARIA BOLIVIA CONSULTORES S.R.L.', '137497026', 'Av. Arequipa NÂ° 8221 Edificio Centro Empresarial La Florida Piso 3 Depto.5, Zona La Florida', 'psoto@binariaconsultores.com', 'Paula Soto', '2141988', '', ''),
(8, 'ESCARLATA INDUSTRIA GRAFICA', '', 'Calle Rigoberto Paredes NÂ° 1200 Plaza Libano Zona Alto San Pedro', 'escarlatagrafica@gmail.com', 'David Alvarado', '2488425', '', ''),
(9, 'LA ESTRELLA', '', '', 'mzuniga@laestrella.cc', 'Maria ZuÃ±iga', '2850851', '', ''),
(10, 'SIEMPRE AMIGOS', '', '', 'coquitoleyva2015@gmail.com', 'Jorge Leyva', '2450768', '', ''),
(11, 'SAID', '', '', '', '', '', '', ''),
(12, 'Asoban', '', '', '', '', '', '', ''),
(13, 'PWC', '', '', '', '', '', '', ''),
(14, 'Ana Mamani', '', 'Clienta de Pro Mujer', '', '', '', '', ''),
(15, 'DMZ Publicidad', '', '', '', '', '', '', ''),
(16, 'Arte y Regalos Anabel', '', '', '', '', '', '', ''),
(17, 'Ofisoft', '', '', '', '', '', '', ''),
(18, 'visiÃ³n moderna', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request`
--

CREATE TABLE `request` (
  `id_req` int(11) NOT NULL,
  `nro_req` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `area_of` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detalle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ref` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `costo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cuadro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_entregado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enviado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proveedor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diseno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `obs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modalidad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cuentacon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estadocon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `request`
--

INSERT INTO `request` (`id_req`, `nro_req`, `fecha_entrega`, `area_of`, `detalle`, `ref`, `presu`, `costo`, `resp`, `estado`, `cuadro`, `fecha_entregado`, `enviado`, `confir`, `proveedor`, `diseno`, `obs`, `modalidad`, `cuentacon`, `estadocon`) VALUES
(1, '001/2018', '2018-01-02', 'Control de Proyectos', 'Servicio anual de calificaciÃ³n de desempeÃ±o RSE', 'N/A', 'SI', '45240.00', 'Gina Escobar', 'CERRADO', '1516025299error.jpg', '', '', '1,2,3,4,5,6,7,8,9,10', 'MICROFINANZAS RATING', 'N/A', 'Pago total', '', NULL, NULL),
(3, '002/2018', '2018-01-31', 'RRHH', 'Tarjetas Personales', 'N/A', 'SI', '90', 'Alejandra Ticona', 'CERRADO', '1518623835tutorial.jpg', '', 'N/A', '', 'STIGMA', '', 'Entregado a RRHH', 'directo', 'SI', 'listo'),
(4, '003/2018', '2018-02-01', 'Area de TI', 'Fuente de Poder para servidor HP Proliant ', 'N/A', 'SI', '7000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', 'N/A', 'Entregado a T.I.', '', 'NO', 'Aun no'),
(5, '004/2018', '2018-02-01', 'Area de TI', 'RenovaciÃ³n Solarwinds', 'N/A', 'SI', '65233.08', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', 'N/A', 'Entregado a T.I.', '', 'NO', 'No Aplica'),
(6, '029/2018', '2018-03-15', 'EducaciÃ³n', 'Llavero acrÃ­lico o goma pvc', 'N/A', 'SI', '64500', 'Alejandra Ticona', 'CERRADO', '', '2018-03-27', '', '', 'STRATOS', '27/03/2018', 'Pago total', '', 'NO', 'Aun no'),
(7, '006/2018', '2018-02-01', 'Recursos Humanos', 'Tarjetas Personales', 'N/A', 'SI', '180', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', 'Entregado a RRHH', 'InvitaciÃ³n Directa', 'SI', 'No Aplica'),
(8, '007/2018', '2018-02-05', 'Riesgos', 'Computadora portatil Dell Intel 7ma generaciÃ³n', 'N/A', 'NO', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', 'Se cancelo la compra por que ya se disponia de una computadora portatil en T.I.', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(9, '008/2018', '2018-02-06', 'AdministraciÃ³n', 'Servicio de Courier', 'N/A', 'SI', '2000', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Angelica Chuquimia Solares', 'N/A', 'Se realiza pagos mensuales, esta en periodo de prueba', '', 'NO', 'Aun no'),
(10, '009/2018', '2018-02-07', 'AdministraciÃ³n', 'Sala de Reuniones cable HDMI', 'N/A', 'NO', '150', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', 'Se realizo la instalaciÃ³n del cable HDMI en sala Warmi', '', 'NO', 'Aun no'),
(11, '025/2018', '2018-03-12', 'Area de TI', 'Servicio de Soporte TÃ©cnico Cisco Smart Net', 'N/A', 'SI', '145584.51', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'TELIS', 'N/A', 'El Ã¡rea legal esta revisando el contrato ', '', 'NO', 'Aun no'),
(12, '011/2018', '2018-02-16', 'EducaciÃ³n', 'Quemado y Serigrafiado de CD difusiÃ³n taller', 'N/A', 'SI', '2200', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'SURGIR', '', 'Entregado al Ã¡rea de educaciÃ³n', '', 'NO', 'Aun no'),
(13, '012/2018', '2018-02-14', 'Riesgos', 'Compra de silla giratoria', 'N/A', 'NO', '1400', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'STRATOS', '', '', '', 'NO', ''),
(14, '013/2018', '2018-02-14', 'EducaciÃ³n', 'Chanchitos alcancia 2000 piezas', 'N/A', 'SI', '25600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', ''),
(15, '014/2018', '2018-02-26', 'Recursos Humanos', 'Cinta Evolis YMCKO Ribbon Colores de 5 paneles', 'N/A', 'SI', '1600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'Aun no'),
(16, '015/2018', '2018-02-27', 'Area de TI', 'ContrataciÃ³n de servicio de enlace de datos para Oficina de Guayaramerin VPN/MPLS', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', ''),
(17, '016/2018', '2018-02-27', 'EducaciÃ³n', 'AudÃ­fonos para Maritza LeÃ³n', 'N/A', 'NO', '280', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'No Aplica'),
(18, '017/2018', '2018-02-27', 'EducaciÃ³n', 'Bolsa cajÃ³n tela galleta', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'Aun no'),
(19, '018/2018', '2018-03-05', 'Seguridad', 'Chapas para mÃ³dulos de caja', 'N/A', 'NO', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'Aun no'),
(20, '019/2018', '2018-03-05', 'Seguridad', 'Cajas BuzÃ³n', 'N/A', 'NO', '28283.20', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'CASE', '', 'Ya realizo la entrega de las cajas buzÃ³n, incumpliÃ³ fecha de entrega, proceso de multas', '', 'NO', 'Aun no'),
(21, '020/2018', '2018-03-05', 'Finanzas', 'Servicio de CalificaciÃ³n de Riesgos', 'N/A', 'NO', '69600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', 'Pago total', '', 'NO', 'Aun no'),
(22, '021/2018', '2018-03-05', 'EducaciÃ³n', 'mochila ecolÃ³gica, pulsera, boligrafo ', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', 'El Ã¡rea de educaciÃ³n cancelo el proceso de compra', '', 'NO', 'Aun no'),
(23, '022/2018', '2018-03-05', 'EducaciÃ³n', 'Gorra con tapa protectora para el sol, bloqueador solar', 'N/A', 'SI', '3600', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'Aun no'),
(24, '023/2018', '2018-02-09', 'Area de TI', 'Mantenimiento preventivo y correctivo de computadoras de escritorio y portÃ¡tiles Modalidad Leasing', 'N/A', 'SI', '0', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'No definido', '', 'Solo llego un sobre cerrado DATEC', '', 'NO', 'Aun no'),
(25, '024/2018', '2018-03-12', 'Area de TI', 'Blade Cisco UCSB-B200-M5-U', 'N/A', 'SI', '0', 'Gina Escobar', 'EN PROCESO', '', '', '', '', 'ALPHA SYSTEMS S.R.L.', '', 'El contrato esta en revision de T.I.', '', 'NO', 'Aun no'),
(27, '026/2018', '2018-03-12', 'EducaciÃ³n', 'Compra de toner de color', 'N/A', 'SI', '2223', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'entrega al area de educacion', '', 'NO', 'No Aplica'),
(28, '027/2018', '2018-03-13', 'Riesgos', 'ReasignaciÃ³n de computadora', 'N/A', 'NO', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'Aun no'),
(29, '028/2018', '2018-03-13', 'Finanzas', 'PublicaciÃ³n de Estados FInancieros', 'N/A', 'SI', '13243', 'Gina Escobar', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'No Aplica'),
(31, '030/2018', '2018-03-15', 'Area de TI', 'Memoria Ram para Portatil Dell Inspiron 5567', 'N/A', 'NO', '930', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'No Aplica'),
(32, '031/2018', '2018-03-19', 'EducaciÃ³n', 'Servicio Plataforma Powtoon', 'N/A', 'NO', '1948.8', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Finanzas realizo el pago', '', 'NO', 'Aun no'),
(33, '032/2018', '2018-03-19', 'EducaciÃ³n', 'Disco Duro Externo de 2TB Pendrive Flash de 16GB', 'N/A', 'NO', '1165', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Entregado al Ã¡rea de educaciÃ³n', '', 'NO', 'Aun no'),
(34, '033/2018', '2018-03-20', 'Area de TI', 'Computadora de Escritorio Dell 5 u.', 'N/A', 'SI', '39970', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Entregado a T.I.', '', 'NO', 'Aun no'),
(35, '034/2018', '2018-03-20', 'Cumplimiento', 'Servicio de datos SiBiL (Lista PEP)', 'N/A', 'NO', '18000', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'BINARIA BOLIVIA CONSULTORES S.R.L.', '', 'Se realizo el pago por el sistema el 50% y en el mes de octubre se pagara el saldo', 'InvitaciÃ³n Directa', 'NO', 'Aun no'),
(36, '35/2018', '2018-04-09', 'EducaciÃ³n', 'Mandil tela popelina, Ponchillo tela popelina', 'N/A', 'SI', '0', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'El Ã¡rea de educaciÃ³n cancelo el proceso', '', 'NO', 'Aun no'),
(37, '36/2018', '2018-04-09', 'Servicios Financieros', 'computadora portatil i7 16GB', 'N/A', 'NO', '8980', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'N/A'),
(38, '37/2018', '2018-04-10', 'EducaciÃ³n', 'Material de capacitaciÃ³n cortado forma foco', 'N/A', 'SI', '2250', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'ESCARLATA INDUSTRIA GRAFICA', '', 'Ya se mando el diseÃ±o al proveedor, estamos a la espera de la prueba de color', '', 'NO', 'Aun no'),
(39, '38/2018', '2018-04-13', 'Recursos Humanos', 'CapacitaciÃ³n Ley 393 de Servicios FInancieros', 'N/A', 'SI', '18400', 'Gina Escobar', 'EN PROCESO', '', '2018-04-13', '', '', 'Miguel Aramayo Ochoa', '', '', 'por excepciÃ³n', 'NO', 'Aun no'),
(40, '39/2018', '2018-03-28', 'AdministraciÃ³n', 'Pago cuota anual FINRURAL', 'N/A', 'SI', '145538', 'Gina Escobar', 'EN PROCESO', '', '', '', '', 'Miguel Aramayo Ochoa', '', '', 'Pago Directo', 'NO', 'N/A'),
(41, '40/2018', '2018-04-16', 'EducaciÃ³n', 'Bolsas planas, individuales color rojo', 'N/A', 'SI', '4800', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Entregado al Ã¡rea de educaciÃ³n', '', 'NO', 'Aun no'),
(42, '41/2018', '2018-04-17', 'EducaciÃ³n', 'Dulces personalizados', 'N/A', 'SI', '4994.50', 'Santiago Silva', 'EN PROCESO', '', '', 'N/A', '', 'LA ESTRELLA', '', 'El proveedor realizo la entrega de los dulces y esta en proceso de pago', '', 'NO', 'Aun no'),
(43, '42/2018', '2018-04-17', 'EducaciÃ³n', 'PortalÃ¡pices, cartÃ³n prensado ', 'N/A', 'SI', '2450', 'Santiago Silva', 'EN PROCESO', '', '2018-07-10', '2018-07-10', '1,2,3,4,5,9', 'Miguel Aramayo Ochoa', '', 'Proceso de Pago final', '', 'NO', 'Aun no'),
(44, '43/2018', '2018-04-19', 'EducaciÃ³n', 'Bolsa tela galleta neceser', 'N/A', 'SI', '30000', 'Alejandra Ticona', 'CERRADO', '', '', '', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'Aun no'),
(45, '44/2018', '2018-04-19', 'Area de TI', 'Soporte y mantenimiento Storage', 'N/A', 'SI', '0', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'ALPHA SYSTEMS S.R.L.', '', '', '', 'NO', 'Aun no'),
(46, '45/2018', '2018-04-19', 'EducaciÃ³n', 'mandil tela engomada', 'N/A', 'SI', '29050', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Proceso de pago final', '', 'NO', 'Aun no'),
(47, '46/2018', '2018-05-02', 'Recursos Humanos', 'Adaptador para televisor sala Warmi', 'N/A', 'SI', '0', 'Alejandra Ticona', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'Aun no'),
(48, '47/2018', '2018-04-30', 'Area de TI', 'Memoria Ram 8GB para PC Dell Vostro 3268', 'N/A', 'SI', '1890', 'Alejandra Ticona', 'CERRADO', '', '', '', '', 'Miguel Aramayo Ochoa', '', 'Entregado a T.I.', '', 'NO', 'Aun no'),
(49, '48/2018', '2018-05-03', 'Marketing y Comunicaciones', 'Trofeos, Certificados, Banners, Pelotas, Botones, Monederos, Lona para Roller, vales de supermercado', 'N/A', 'SI', '15005', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Entregado a Marketing y enviado a las regionales', '', 'NO', 'Aun no'),
(50, '49/2018', '2018-05-07', 'Riesgos', 'Tarjeta de Video ', 'N/A', 'NO', '0', 'Alejandra Ticona', 'COTIZACION', '', '', '', '', 'Miguel Aramayo Ochoa', '', 'No tengo requerimiento', '', 'NO', 'No Aplica'),
(51, '50/2018', '2018-05-04', 'Contabilidad', 'Empastado EEFF y documentos contables', 'N/A', 'NO', '2800', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'SIEMPRE AMIGOS', '', 'A la espera de los documentos para envio al proveedor', '', 'NO', 'No Aplica'),
(52, '51/2018', '2018-05-07', 'Recursos Humanos', 'Impresora de Credenciales ', 'N/A', 'NO', '12268', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No aun'),
(53, '52/2018', '2018-05-07', 'Recursos Humanos', 'Compra libros de Ingles ', 'N/A', 'NO', '7000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(54, '53/2018', '2018-05-10', 'Proyectos', 'Silla Giratoria para Romina Gerrero', 'N/A', 'NO', '1690', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'N/A'),
(55, '54/2018', '2018-05-07', 'Area de TI', 'Blu Ray para backup', 'N/A', 'NO', '4200', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'N/A'),
(56, '55/2018', '2018-05-10', 'EducaciÃ³n', 'Mochilas ', 'N/A', 'SI', '0', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', 'Proceso anulado', 'Se pago un anticipo del 40% para la elaboraciÃ³n de las mochilas', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(57, '56/2018', '2018-05-12', '', 'Sistema de control de cumplimiento de correspondencia Normativa', 'N/A', 'NO', '29731.20', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Falta firma de contrato del proveedor', 'Directo', 'NO', 'Aun no'),
(58, '57/2018', '2018-05-15', 'Marketing y Comunicaciones', 'ContrataciÃ³n de un diseÃ±ador grÃ¡fico externo', 'N/A', 'SI', '9545.15', 'Alejandra Ticona', 'APROBADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagos mensuales hasta noviembre de 2018', 'Directo', 'NO', 'Aun no'),
(59, '58/2018', '2018-05-15', 'Marketing y Comunicaciones', 'Pago participaciÃ³n Feria del CrÃ©dito en Oruro', 'N/A', 'NO', '4000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', 'Directo', 'NO', 'No Aplica'),
(60, '59/2018', '2018-05-16', 'Marketing y Comunicaciones', 'pulseras, boligrafos, globos, tablets Feria de CrÃ©dito Oruro', 'N/A', 'NO', '12570', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'A'),
(61, '60/2018', '2018-05-22', '', 'SeÃ±aletica para CPD', 'N/A', 'NO', '60', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(62, '61/2018', '2018-05-22', 'EducaciÃ³n', 'Volantes de PromociÃ³n', 'N/A', 'SI', '12183', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Espera de la prueba de color', '', 'NO', 'Aun no'),
(63, '62/2018', '2018-05-10', 'Marketing y Comunicaciones', 'ImpresiÃ³n laminado de fotografias', 'N/A', 'NO', '10350', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(64, '63/2018', '2018-05-25', 'Recursos Humanos', 'compra libro Hector Careaga', 'N/A', 'NO', '304.35', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'No Aplica'),
(65, '62/2018', '2018-06-04', 'Finanzas', '3 computadoras portatiles', 'N/A', 'NO', '0', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Proceso con Subgerencia de AdministraciÃ³n', '', 'NO', 'No Aplica'),
(66, '63/2018', '2018-06-04', 'EducaciÃ³n', '722 mochilas o 722 maletines', 'N/A', 'SI', '68590', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Se pago el 40% para la elaboraciÃ³n de mochilas', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(67, '64/2018', '2018-06-07', 'Area de TI', 'Compra de 17 equipos portatiles', 'N/A', 'SI', '0', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Proceso con Subgerencia de AdministraciÃ³n', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(68, '65/2018', '2018-06-07', 'Area de TI', 'Licencia anual de antivirus Trend Micro ', 'N/A', 'SI', '0', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Proceso con Subgerencia de AdministraciÃ³n', '', 'NO', 'Aun no'),
(69, '66/2018', '2018-06-07', 'Operaciones', 'Lector de CD externo para laptop', 'N/A', 'NO', '0', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'No Aplica'),
(70, '67/2018', '2018-06-13', 'Recursos Humanos', 'Curso Normativa ASFI 2da parte', 'N/A', 'SI', '9000', 'Alejandra Ticona', 'CERRADO', '', '2018-06-14', '2018-06-14', '2', 'Miguel Aramayo Ochoa', '', 'Pagado', 'por excepciÃ³n', 'NO', 'No Aplica'),
(71, '68/2018', '2018-06-18', 'Marketing y Comunicaciones', 'pulsera, boligrafo, mantas, llaveros, chamarras, mesa baul', 'N/A', 'SI', '38320', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Las pulseras, bolÃ­grafos y globos esta en proceso de pago de Santiago Silva y las Mantas, polos y chamarras estamos a la espera de las mantas', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(72, '69/2018', '2018-06-18', 'Riesgos', 'Estufa', 'N/A', 'NO', '0', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'No Aplica'),
(73, '70/2018', '2018-06-18', 'Marketing y Comunicaciones', 'Pago participaciÃ³n Feria del CrÃ©dito en Sucre', 'N/A', 'SI', '4000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', '', 'NO', 'Aun no'),
(74, '71/2018', '2018-06-18', 'EducaciÃ³n', 'Equipo Portatil', 'N/A', 'NO', '0', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Proceso con Subgerencia de AdministraciÃ³n', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(75, '72/2018', '2018-06-20', 'Recursos Humanos', 'Extintor tipo BC de 6 kilos marca Kidde', 'N/A', 'NO', '0', '', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'ya se solicito ya nos entregaran', '', 'NO', 'N/A'),
(76, '73/2018', '2018-06-20', 'EducaciÃ³n', 'Tinta a colores y negro para impresora', 'N/A', 'NO', '0', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Proceso de firma de Orden de compra con Gina Escobar', '', 'NO', 'No Aplica'),
(77, '74/2018', '2018-06-26', 'Marketing y Comunicaciones', 'ImpresiÃ³n digital de memoria 2017 copiado de CD', 'N/A', 'SI', '16200', 'Santiago Silva', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'En proceso de pago con Santiago Silva', '', 'NO', 'Aun no'),
(78, '75/2018', '2018-05-07', 'Finanzas', 'CalificaciÃ³n de Riesgo de Valores de TitularizaciÃ³n a ser emitido por el patrimonio AutÃ³nomo Microcredito IFD BDP ST038', 'N/A', 'NO', '0', '', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'SI', 'Ya cuenta con firmas'),
(79, '76/2018', '2018-06-07', 'Contabilidad', 'Servicio de Auditoria Externa', 'N/A', 'SI', '325000', 'Gina Escobar', 'EN PROCESO', '', '', '', '', 'Miguel Aramayo Ochoa', '', 'Proceso con Subgerencia de AdministraciÃ³n', 'InvitaciÃ³n Directa', 'NO', 'Aun no'),
(80, '77/2018', '2018-06-27', 'Proyectos', 'ElaboraciÃ³n de Balance Social', 'N/A', 'NO', '15000', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Pagado', 'InvitaciÃ³n Directa', 'NO', 'Aun no'),
(81, '78/2018', '2018-06-29', 'Seguridad', 'Sensor aniego (agua/temperatura) para CPDA', 'N/A', 'NO', '1537', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Proveedor realizara la instalaciÃ³n el miÃ©rcoles 18/07/2018', '', 'NO', 'Aun no'),
(82, '79/2018', '2018-07-04', 'EducaciÃ³n', 'Cartel ImpresiÃ³n 520 vinilos 520 lonas Desarrollo reuniÃ³n de pagos', 'N/A', 'SI', '10400', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Espera de la prueba de color', '', 'NO', 'Aun no'),
(83, '80/2018', '2018-07-04', 'EducaciÃ³n', 'DVD Bluray Externo con quemador de discos, set de altavoces, auricular, microfono mouse', 'N/A', 'SI', '2525', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'A la espera que el proveedor entregue los accesorios', '', 'NO', 'Aun no'),
(84, '81/2018', '2018-07-04', 'EducaciÃ³n', 'Cartilla posesiÃ³n mesa directiva Afiche Plan Tranquilidad', 'N/A', 'SI', '1610', 'Alejandra Ticona', 'EN PROCESO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Espera de la prueba de color', '', 'NO', 'Aun no'),
(85, '82/2018', '2018-07-05', 'Area de TI', 'Unidad UPS de 10 KVA intalaciÃ³n UPS en Cbba', 'N/A', 'SI', '0', 'Alejandra Ticona', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'Aun no'),
(86, '83/2018', '2018-07-04', 'Recursos Humanos', 'Tarjetas Personales Gerencia General', 'N/A', 'NO', '140', 'Alejandra Ticona', 'CERRADO', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', 'Entregado a RRHH y pagado con caja chica', '', 'NO', 'N/A'),
(87, '84/2018', '2018-07-06', 'Recursos Humanos', 'Tinta YMCKO P/N RSF002AAA', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', 'Directo', 'NO', 'No Aplica'),
(88, '85/2018', '2018-07-10', 'Area de TI', 'renovaciÃ³n anual dominio promujer.org.bo', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', 'Directo', 'NO', 'Aun no'),
(89, '86/2018', '2018-07-09', 'Finanzas', 'publicaciÃ³n en prensa de Estados Financieros', 'N/A', 'NO', '0', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', 'Directo', 'NO', 'N/A'),
(90, '87/2018', '2018-07-10', 'Legal', 'audÃ­fonos con microfono ', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', 'Directo', 'NO', 'N/A'),
(91, '88/2018', '2018-07-11', 'EducaciÃ³n', 'Contrato para DiseÃ±o de Temas con EducaciÃ³n Isaac Quino', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', '', '', '', 'NO', 'Aun no'),
(92, '89/2018', '2018-07-13', 'Recursos Humanos', 'Empastados documentos de RRHH', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'Miguel Aramayo Ochoa', 'N/A', '', 'Directo', 'NO', 'N/A'),
(93, '90/2018', '2018-07-18', 'Area de TI', 'Licencia QlikView Small Business Edition Server', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'SIEMPRE AMIGOS', '', 'cotizar con AXON', 'Compra por excepciÃ³n Ãºnico proveedor', 'NO', 'Aun no'),
(94, '91/2018', '2018-07-20', 'Contabilidad', 'Mouse inalambrico Logitech', 'N/A', 'NO', '0', 'Santiago Silva', 'EN PROCESO', '', '', 'N/A', '', 'SIEMPRE AMIGOS', '', '', 'Directo', 'NO', 'No Aplica'),
(95, '92/2018', '2018-07-20', 'AdministraciÃ³n', 'ImpresiÃ³n de papel membretado', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'SIEMPRE AMIGOS', '', '', 'Directo', 'NO', 'No Aplica'),
(96, '93/2018', '2018-07-26', 'Marketing y Comunicaciones', 'Feria crÃ©dito PotosÃ­, chamarras, polos', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'SIEMPRE AMIGOS', '', '', '', 'NO', 'Aun no'),
(97, '94/2018', '2018-07-27', 'Legal', 'Servicio contrataciÃ³n Auxiliar de Servicios Stolzel', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'SIEMPRE AMIGOS', 'N/A', '', '', 'NO', 'Aun no'),
(98, '95/2018', '2018-07-31', 'EducaciÃ³n', 'Cartilla de desarrollo de reuniÃ³n de pago, desarrollo desarrollo de desembolso', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'SIEMPRE AMIGOS', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(99, '96/2018', '2018-08-03', 'Area de TI', 'Escritorio para oficina TI', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Directo', 'NO', 'Aun no'),
(100, '97/2018', '2018-08-07', 'AdministraciÃ³n', 'reparaciÃ³n camioneta Chevrolet en comodato Of Nacional ', 'N/A', 'SI', '0', 'Santiago Silva', 'CERRADO', '', '', '', '', 'No definido', 'N/A', 'Ya se realizaron estos arreglos', 'Directo', 'NO', 'N/A'),
(101, '98/2018', '2018-07-19', 'Legal', '3 escritorios (2 Ã¡rea legal, 1 marketing)', 'N/A', 'NO', '5400', 'Santiago Silva', 'CERRADO', '', '', 'N/A', '', 'SIEMPRE AMIGOS', 'N/A', '', 'Directo', 'NO', 'N/A'),
(102, '99/2018', '2018-08-03', 'AdministraciÃ³n', 'Traslado de areas, armado desarmado de muebles, cambio de chapas, reparaciÃ³n de muebles', 'N/A', 'SI', '870', 'Santiago Silva', 'CERRADO', '', '', '2018-08-03', '2', 'SIEMPRE AMIGOS', 'N/A', '', 'Directo', 'NO', 'N/A'),
(103, '100/2018', '2018-08-10', 'EducaciÃ³n', 'Juego de identificaciÃ³n,  mesa directiva presidenta secretaria 108 u. de c/u', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'SIEMPRE AMIGOS', 'N/A', 'solicitan mismo proveedor que ya hizo este trabajo por que tiene los diseÃ±os formatos etc', 'Directo', 'NO', 'N/A'),
(104, '101/2018', '2018-08-14', 'Seguridad', 'Servicios de Seguridad FÃ­sica', 'N/A', 'SI', '0', 'Gina Escobar', 'COTIZACION', '', '', '', '', 'SIEMPRE AMIGOS', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(105, '102/2018', '2018-08-20', 'Riesgos', 'PublicaciÃ³n en prensa invitaciÃ³n Hacking Ã‰tico', 'N/A', 'NO', '634', 'Gina Escobar', 'EN PROCESO', '', '', '', '', 'No definido', 'N/A', 'El Ã¡rea de contabilidad aprobÃ³ los artes ', 'Directo', 'NO', 'N/A'),
(106, '103/2018', '0018-02-20', 'EducaciÃ³n', 'ImpresiÃ³n regla Pro Mujer  1.500 u.', 'N/A', 'SI', '2800', 'Santiago Silva', 'CERRADO', '', '2018-09-05', '', '', 'ESCARLATA INDUSTRIA GRAFICA', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'N/A'),
(107, '104/2018', '2018-08-21', 'Recursos Humanos', 'capacitaciÃ³n ley 393 de Servicios Financieros|', 'N/A', 'SI', '8500', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'SIEMPRE AMIGOS', 'N/A', 'No presenta Facturas PM debe adicionar al monto', 'Directo', 'NO', 'No Aplica'),
(108, '105/2018', '2018-08-09', 'Riesgos', 'Servicio de Ethical Hacking', 'Si', 'SI', '0', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(109, '106/2018', '2018-08-27', 'EducaciÃ³n', 'Estuche rectangular de lona roja 1500 u. con serigrafiado', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', '', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(110, '107/2018', '2018-08-28', 'Area de TI', 'Mantenimiento del equipo aire acondicionado de precisiÃ³n Marca Uniflair', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', 'El Ã¡rea de TI solicita la contrataciÃ³n de la empresa SEIMEX', 'Directo', 'NO', 'Aun no'),
(111, '108/2018', '2018-08-28', 'Area de TI', 'Headphones USB para PC 7 u.', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(112, '109/2018', '2018-08-20', 'Proyectos', 'CENSO enfocado en las personas que elaboran artesanÃ­as ', 'Si', 'NO', '50000', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'SAID', 'N/A', '', 'Directo', 'NO', 'Aun no'),
(113, '110/2018', '2018-08-31', 'Area de TI', 'Mantenimiento preventivo UPS 1 CPD UPS 2 CPD', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', '', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(114, '111/2018', '2018-08-31', 'Area de TI', 'Proyecto mejora de infraestructura para el CPD alterno de la regional El Alto', 'Si', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(115, '112/2018', '2018-08-31', 'Marketing y Comunicaciones', 'SeÃ±aletica Oficinas de acuerdo a detalle (paneles, horarios atenciÃ³n, normas de cajas, linea gratuita, logos epsas, yambal, panel de comunicaciones', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(116, '113/2018', '2018-08-31', 'Marketing y Comunicaciones', 'pago participaciÃ³n Feria del Credito en El Alto', 'N/A', 'NO', '4000', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'Asoban', '', '', '', 'NO', 'Aun no'),
(117, '114/2018', '2018-09-03', 'Marketing y Comunicaciones', 'Afiche punto de reclamo 250 u.', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', '', '', 'No definido', '', '', '', 'NO', 'Aun no'),
(118, '115/2018', '2018-08-30', 'Riesgos', 'Silla Giratoria Ruben Mollericona', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(119, '116/2018', '2018-08-03', 'Riesgos', 'silla giratoria Sub Gerente de Riesgos', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Directo', 'NO', 'N/A'),
(120, '117/2018', '2018-09-04', 'EducaciÃ³n', 'afiche convocatoria semillero asesores Banca Comunal', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'N/A'),
(121, '118/2018', '2018-09-05', 'Marketing y Comunicaciones', 'pizarra de tasas', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', 'solicitan el mismo proveedor ya que estarian faltando 6 pizarras', 'Directo', 'NO', 'N/A'),
(122, '119/2018', '2018-09-04', 'Riesgos', 'Computadora Lap Top Core i7 septima generacion para Sub Gerente de Ruesgo de Credito', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', 'TI debe indicar las caracteristicas del equipo para realizar las cotizaciones', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(123, '120/2018', '2018-09-04', 'EducaciÃ³n', 'chaleco sin forro y con forro', 'N/A', 'SI', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No aun'),
(124, '121/2018', '2018-09-01', 'Contabilidad', 'Asesoramiento Tributario', 'N/A', 'SI', '60.000', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', 'La propuesta con Fernando preguntara a Patricia si se puede contratar por exepciÃ³n', 'Directo', 'NO', 'Aun no'),
(125, '122/2018', '2018-09-06', 'Auditoria', 'Auditoria de Sistemas', 'Si', 'SI', '140.000', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'PWC', 'N/A', 'Gerencia de Auditoria solicita la re contrataciÃ³n a la empresa PWC quien realizo el serv la gestiÃ³n pasada', 'Directo', 'NO', 'Aun no'),
(126, '123/2018', '2018-09-11', 'Area de TI', 'Ventilador para aire de precisiÃ³n Leonardo TDAR Filtro de aire G4 para  equipo unidad de extracciÃ³n de aire', 'N/A', 'SI', '11.000', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(127, '124/2018', '2018-09-11', 'Area de TI', 'Memoria Ram para PC del Vostro 460 Pastillas de 8GB PC3-1333 MHZ', 'N/A', 'SI', '1000', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(128, '125/2018', '2018-09-11', 'Riesgos', 'Mochila equipos laptop para Maritza y Michael', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'No Aplica'),
(129, '126/2018', '2018-09-11', 'Area de TI', 'Sillas Giratorias', 'N/A', 'NO', '0', 'Santiago Silva', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(130, '127/2018', '2018-08-28', 'Finanzas', 'Servicio de Precios de Transferencia', 'Si', 'SI', '0', 'Gina Escobar', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(131, '128/2018', '2018-08-23', 'Marketing y Comunicaciones', 'Pizarra  de tasas 42 u.', 'N/A', 'NO', '10500', 'Santiago Silva', 'EN PROCESO', '', '', 'N/A', '', 'PWC', '', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(132, '129/2018', '2018-09-17', 'Asistente de Gerencia', 'Silla Giratoria  Asistente de Gerencia', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', '', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(133, '130/2018', '2018-09-17', 'Area de TI', '8GB Memoria RAM Upgrade para HP ProLiant DL380 2 u.', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(134, '131/2018', '2018-10-08', 'EducaciÃ³n', 'Volante de promociÃ³n, cartilla de posiciÃ³n mesa directiva, juego de identificadores, rompezabezas, tripticos, afiche del consumidor financiero, banner, afiches, rotafolio promociÃ³n, rotafolio de capacitaciÃ³n, juego identificador mesa directiva, rotafo', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(135, '132/2018', '2018-09-19', 'Finanzas', 'Memoria Externa 1 Tera', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'N/A'),
(136, '133/2018', '2018-09-20', 'AdministraciÃ³n', 'Compra de papel bond tamaÃ±o carta', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(137, '134/2018', '2018-09-20', 'AdministraciÃ³n', 'Compra de mates, tÃ©, cafÃ©, azÃºcar, servilletas', 'N/A', 'SI', '3000', 'Karen Lanza', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Directo', 'NO', 'No Aplica'),
(138, '135/2018', '2018-09-21', 'Auditoria', 'Silla para escritorio', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(139, '136/2018', '2018-09-21', 'Area de TI', '4GB Memoria RAM Upgrade para Dell Power Edge', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(140, '137/2018', '2018-09-25', 'EducaciÃ³n', 'Rotafolio pequeÃ±o de promociÃ³n anillado de garantÃ­a, rompezabezas 3 unidades', 'N/A', 'SI', '345', 'Juan Callisaya', 'EN PROCESO', '', '', '', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(141, '138/2018', '2018-09-25', 'Marketing y Comunicaciones', 'Chamarras y polos manga corta 20 u. feria Tarija', 'N/A', 'NO', '3500', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '6', 'No definido', 'N/A', 'Para feria del crÃ©dito en Tarija', 'Directo', 'NO', 'No Aplica'),
(142, '139/2018', '2018-09-25', 'EducaciÃ³n', 'Rotafolio charla promocional, rotafolio capacitaciÃ³n inicial', 'N/A', 'NO', '1800', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(143, '140/2018', '2018-09-25', 'EducaciÃ³n', 'Manillas rojas de hilo', 'N/A', 'NO', '700', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(144, '141/2018', '2018-09-27', 'Area de TI', 'Consultoria para construcciÃ³n de formularios electrÃ³nicos y reportes del Ã¡rea de educaciÃ³n', 'N/A', 'NO', '5000', 'Gina Escobar', 'EN PROCESO', '', '', 'N/A', '', 'No definido', '', '', 'Directo', 'NO', 'No Aplica'),
(145, '142/2018', '2018-09-27', 'Marketing y Comunicaciones', 'Juego de nÃºmeros imantados 150u.', 'N/A', 'NO', '2055', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(146, '143/2018', '2018-10-02', 'Marketing y Comunicaciones', 'Roller Screm 2 u.', 'N/A', 'NO', '980', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(147, '144/2018', '2018-10-08', 'EducaciÃ³n', 'Manillas rojas de hilo', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', '', '', 'Ana Mamani', 'N/A', 'Solo esa seÃ±ora cliente realiza este tipo de manillas', 'Directo', 'NO', 'Aun no'),
(148, '145/2018', '2018-10-04', 'Area de TI', 'Mantenimiento y cambio de baterias sistema de detecciÃ³n contra incendios CPD', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(149, '146/2018', '2018-10-01', 'Riesgos', 'Gavetero de madera 4 cajones', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(150, '147/2018', '2018-10-08', 'Area de TI', 'Disco Duro SATA para PC 4TB y 1 TB', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(151, '148/2018', '2018-10-08', 'Riesgos', 'ConsultorÃ­a de Reportes de Mercado Semestrales', 'N/A', 'NO', '0', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', '', '', 'InvitaciÃ³n Directa', 'NO', 'No aun'),
(152, '149/2018', '2018-10-03', 'Recursos Humanos', 'InstalaciÃ³n de red Oficina Nacional para conexiÃ³n de impresora ', 'N/A', 'NO', '1096', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(153, '150/2018', '2018-10-11', 'Area de TI', 'Cableado estructurado de datos Oficina El Zodiaco', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(154, '151/2018', '2018-10-11', 'Recursos Humanos', 'Tinta YMCKO P/N RSF002AAA', 'N/A', 'SI', '2200', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Directo', 'NO', 'No Aplica'),
(155, '152/2018', '2018-10-12', 'EducaciÃ³n', 'Cuadernos, bolÃ­grafos touch, bolÃ­grado  de plastico, lÃ¡piz, ecobolsa, gomas tajador, monederos, libretas', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(156, '153/2018', '2018-10-12', 'Area de TI', 'Nuevo contenedor copias de raspados Brinks', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'SI', 'contrato conjunto de servicio'),
(157, '154/2018', '2018-10-12', 'Riesgos', 'Consultoria de desarrollo de aplicativo herramienta de seguimiento para O&M', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', 'El Ã¡rea de riesgos solicito la contrataciÃ³n al seÃ±or Ramiro Mojica', 'Directo', 'SI', 'Aun no'),
(158, '155/2018', '2018-10-17', 'Legal', 'Cooler para laptop, protector de silicona', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(159, '156/2018', '2018-10-22', 'Riesgos', 'Ventilador Computadora, mouse computadora', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Directo', 'NO', 'No Aplica'),
(160, '157/2018', '2018-10-22', 'Auditoria', 'Sillas giratorias 2', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(161, '158/2018', '2018-10-22', 'EducaciÃ³n', 'Jarra de plÃ¡stico de 2 litros con logotipo institucional', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(162, '159/2018', '2018-10-22', 'EducaciÃ³n', 'Llaveros de plÃ¡stico', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(163, '160/2018', '2018-10-22', 'EducaciÃ³n', 'Sombrero cumpleaÃ±eras', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(164, '161/2018', '2018-10-22', 'EducaciÃ³n', 'Bolsas, delantales, tazas de porcelana, boligrafos', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(165, '162/2018', '2018-10-23', 'EducaciÃ³n', 'GuÃ­a Charla promocional informativa', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(166, '163/2018', '2018-10-22', 'EducaciÃ³n', 'Caja de madera (caja recaudadora)', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(167, '164/2018', '2018-10-23', 'EducaciÃ³n', 'Copas de plÃ¡stico duro con el logotipo. vasos plÃ¡stico duro', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(168, '165/2018', '2018-10-23', 'EducaciÃ³n', 'Formulario CC1 Registro de contactos, aprende pasante ', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(169, '166/2018', '2018-10-22', 'Marketing y Comunicaciones', 'pago feria, chamarras, polos, dipticos, abanicos', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(170, '167/2018', '2018-10-11', 'EducaciÃ³n', 'Chaleco sin forro 86 u.', 'N/A', 'SI', '5160', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'DMZ Publicidad', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(171, '168/2018', '2018-09-25', 'EducaciÃ³n', 'Globos con serigrafiado', 'N/A', 'SI', '11868', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'Arte y Regalos Anabel', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(172, '169/2018', '2018-10-25', 'AdministraciÃ³n', 'Papel higienico papel toalla para manos', 'N/A', 'SI', '6144', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(173, '170/2018', '2018-10-30', 'AdministraciÃ³n', 'Pizarra acrÃ­lica para nueva oficina', 'N/A', 'SI', '700', 'Juan Callisaya', 'CERRADO', '', '', 'N/A', '', 'Ofisoft', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(174, '171/2018', '2018-10-29', 'EducaciÃ³n', 'tripticos Full Color', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(175, '172/2018', '2018-10-29', 'Area de TI', 'Cortapicos 10 u.', 'N/A', 'NO', '0', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'No Aplica'),
(176, '173/2018', '2018-10-23', 'Area de TI', 'Mantenimiento preventivo de computadoras ', 'N/A', 'SI', '0', 'Juan Callisaya', 'EN PROCESO', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Directo', 'NO', 'No Aplica'),
(177, '174/2018', '2018-11-01', 'EducaciÃ³n', 'Manual capacitaciÃ³n inicial 600 u.', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(178, '175/2018', '2018-10-28', 'Riesgos', 'Licencias OnDemand - On Premise SuscripciÃ³n Anual ', 'N/A', 'NO', '106330', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'ComparaciÃ³n de precios', 'NO', 'Aun no'),
(179, '176/2018', '2018-11-06', 'Seguridad', 'Recarga extintor tipo BC', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'No Aplica'),
(180, '177/2018', '2018-11-06', 'Cumplimiento', 'Silla Operativa', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Directo', 'NO', 'No Aplica'),
(181, '178/2018', '2018-11-06', 'Area de TI', 'Lector quemador bluray sata interno para PC 4u. /Disco duro sata interno para PC de 2TB', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'No Aplica'),
(182, '179/2018', '2018-11-07', 'EducaciÃ³n', 'ImpresiÃ³n de lona banner No a la violencia contra la mujer', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'No Aplica'),
(183, '180/2018', '2018-11-07', 'marketing', 'ProducciÃ³n de bolsos para clientes', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Por comparaciÃ³n de precios', 'NO', 'Aun '),
(184, '181/2018', '2018-11-15', 'Area de TI', 'Computadoras 8GB para Oruro Proyecto PEC', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Por comparaciÃ³n de precios', 'NO', 'N/A'),
(185, '182/2018', '2018-11-16', 'Area de TI', 'Consultoria para elaboraciÃ³n de politicas normas y procedimientos de FundaciÃ³n, contamplando normativa de ASFI', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', '', 'NO', 'Aun '),
(186, '183/2018', '2018-11-10', 'AdministraciÃ³n', 'Alquiler de oficinas ampliaciÃ³n', 'N/A', 'NO', '0', 'Santiago Silva', 'EN PROCESO', '', '', 'N/A', '', 'visiÃ³n moderna', 'N/A', '', 'Directo', 'SI', 'Firmado'),
(187, '184/2018', '2018-11-20', 'EducaciÃ³n', 'Bolsa Tela Galleta simple y cartera color rojo 21500 u y 10750 u.', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Por comparaciÃ³n de precios', 'NO', 'Aun '),
(188, '185/2018', '2018-11-20', 'EducaciÃ³n', 'Bolsa simple tela galleta', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Por comparaciÃ³n de precios', 'NO', 'Aun '),
(189, '186/2018', '2018-11-20', 'Area de TI', 'Cableado estructurado de red y elÃ©ctrico para oficinas Edif. VisiÃ³n Moderna', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Por comparaciÃ³n de precios', 'NO', 'Aun '),
(190, '187/2018', '2018-11-21', 'EducaciÃ³n', 'Llaveros de Goma', 'N/A', 'SI', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', 'N/A', '', 'Por comparaciÃ³n de precios', 'NO', 'Aun '),
(191, '188/2018', '2018-11-23', 'Seguridad', 'InstalaciÃ³n del software de monitoreo IPRS7, modem', 'N/A', 'NO', '0', 'Juan Callisaya', 'COTIZACION', '', '', 'N/A', '', 'No definido', '', '', 'Por comparaciÃ³n de precios', 'NO', 'Aun ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `nombre`, `apellidos`, `sexo`, `email`, `nombre_usuario`, `password`) VALUES
(0, 'luis', 'luis', 'M', 'luluispuro@gmail.com', 'luis', 0xafc89435c36d0ed892778f1f8c5530db);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cumplido`
--
ALTER TABLE `cumplido`
  ADD PRIMARY KEY (`id_cum`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_req`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cumplido`
--
ALTER TABLE `cumplido`
  MODIFY `id_cum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `request`
--
ALTER TABLE `request`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
