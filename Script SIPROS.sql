INSERT INTO `regions` (`id`, `nombre_region`) VALUES
	(1, 'Occidental'),
	(2, 'Central'),
	(3, 'Paracentral'),
	(4, 'Oriental');


INSERT INTO `departamentos` (`id`, `nombre_departamento`, `id_region`) VALUES
	(1, 'Ahuachapán', 1),
	(2, 'Santa Ana', 1),
	(3, 'Sonsonate', 1),
	(4, 'La Libertad', 2),
	(5, 'Chalatenango', 2),
	(6, 'San Salvador', 2),
	(7, 'Cuscatlán', 3),
	(8, 'La Paz', 3),
	(9, 'Cabañas', 3),
	(10, 'San Vicente', 3),
	(11, 'Usulután', 4),
	(12, 'Morazán', 4),
	(13, 'San Miguel', 4),
	(14, 'La Unión', 4);


INSERT INTO `municipios` (`id`, `nombre_municipio`, `id_departamento`) VALUES
(1, 'Ahuachapán', 1),
(2, 'Jujutla', 1),
(3, 'Atiquizaya', 1),
(4, 'Concepción de Ataco', 1),
(5, 'El Refugio', 1),
(6, 'Guaymango', 1),
(7, 'Apaneca', 1),
(8, 'San Francisco Menéndez', 1),
(9, 'San Lorenzo', 1),
(10, 'San Pedro Puxtla', 1),
(11, 'Tacuba', 1),
(12, 'Turín', 1),
(13, 'Candelaria de la Frontera', 2),
(14, 'Chalchuapa', 2),
(15, 'Coatepeque', 2),
(16, 'El Congo', 2),
(17, 'El Porvenir', 2),
(18, 'Masahuat', 2),
(19, 'Metapán', 2),
(20, 'San Antonio Pajonal', 2),
(21, 'San Sebastián Salitrillo', 2),
(22, 'Santa Ana', 2),
(23, 'Santa Rosa Guachipilín', 2),
(24, 'Santiago de la Frontera', 2),
(25, 'Texistepeque', 2),
(26, 'Acajutla', 3),
(27, 'Armenia', 3),
(28, 'Caluco', 3),
(29, 'Cuisnahuat', 3),
(30, 'Izalco', 3),
(31, 'Juayúa', 3),
(32, 'Nahuizalco', 3),
(33, 'Nahulingo', 3),
(34, 'Salcoatitán', 3),
(35, 'San Antonio del Monte', 3),
(36, 'San Julián', 3),
(37, 'Santa Catarina Masahuat', 3),
(38, 'Santa Isabel Ishuatán', 3),
(39, 'Santo Domingo de Guzmán', 3),
(40, 'Sonsonate', 3),
(41, 'Sonzacate', 3),
(42, 'Alegría', 11),
(43, 'Berlín', 11),
(44, 'California', 11),
(45, 'Concepción Batres', 11),
(46, 'El Triunfo', 11),
(47, 'Ereguayquín', 11),
(48, 'Estanzuelas', 11),
(49, 'Jiquilisco', 11),
(50, 'Jucuapa', 11),
(51, 'Jucuarán', 11),
(52, 'Mercedes Umaña', 11),
(53, 'Nueva Granada', 11),
(54, 'Ozatlán', 11),
(55, 'Puerto El Triunfo', 11),
(56, 'San Agustín', 11),
(57, 'San Buenaventura', 11),
(58, 'San Dionisio', 11),
(59, 'San Francisco Javier', 11),
(60, 'Santa Elena', 11),
(61, 'Santa María', 11),
(62, 'Santiago de María', 11),
(63, 'Tecapán', 11),
(64, 'Usulután', 11),
(65, 'Carolina', 13),
(66, 'Chapeltique', 13),
(67, 'Chinameca', 13),
(68, 'Chirilagua', 13),
(69, 'Ciudad Barrios', 13),
(70, 'Comacarán', 13),
(71, 'El Tránsito', 13),
(72, 'Lolotique', 13),
(73, 'Moncagua', 13),
(74, 'Nueva Guadalupe', 13),
(75, 'Nuevo Edén de San Juan', 13),
(76, 'Quelepa', 13),
(77, 'San Antonio del Mosco', 13),
(78, 'San Gerardo', 13),
(79, 'San Jorge', 13),
(80, 'San Luis de la Reina', 13),
(81, 'San Miguel', 13),
(82, 'San Rafael Oriente', 13),
(83, 'Sesori', 13),
(84, 'Uluazapa', 13),
(85, 'Arambala', 12),
(86, 'Cacaopera', 12),
(87, 'Chilanga', 12),
(88, 'Corinto', 12),
(89, 'Delicias de Concepción', 12),
(90, 'El Divisadero', 12),
(91, 'El Rosario (Morazán)', 12),
(92, 'Gualococti', 12),
(93, 'Guatajiagua', 12),
(94, 'Joateca', 12),
(95, 'Jocoaitique', 12),
(96, 'Jocoro', 12),
(97, 'Lolotiquillo', 12),
(98, 'Meanguera', 12),
(99, 'Osicala', 12),
(100, 'Perquín', 12),
(101, 'San Carlos', 12),
(102, 'San Fernando (Morazán)', 12),
(103, 'San Francisco Gotera', 12),
(104, 'San Isidro (Morazán)', 12),
(105, 'San Simón', 12),
(106, 'Sensembra', 12),
(107, 'Sociedad', 12),
(108, 'Torola', 12),
(109, 'Yamabal', 12),
(110, 'Yoloaiquín', 12),
(111, 'La Unión', 14),
(112, 'San Alejo', 14),
(113, 'Yucuaiquín', 14),
(114, 'Conchagua', 14),
(115, 'Intipucá', 14),
(116, 'San José', 14),
(117, 'El Carmen (La Unión)', 14),
(118, 'Yayantique', 14),
(119, 'Bolívar', 14),
(120, 'Meanguera del Golfo', 14),
(121, 'Santa Rosa de Lima', 14),
(122, 'Pasaquina', 14),
(123, 'Anamoros', 14),
(124, 'Nueva Esparta', 14),
(125, 'El Sauce', 14),
(126, 'Concepción de Oriente', 14),
(127, 'Polorós', 14),
(128, 'Lislique', 14),
(129, 'Antiguo Cuscatlán', 4),
(130, 'Chiltiupán', 4),
(131, 'Ciudad Arce', 4),
(132, 'Colón', 4),
(133, 'Comasagua', 4),
(134, 'Huizúcar', 4),
(135, 'Jayaque', 4),
(136, 'Jicalapa', 4),
(137, 'La Libertad', 4),
(138, 'Santa Tecla', 4),
(139, 'Nuevo Cuscatlán', 4),
(140, 'San Juan Opico', 4),
(141, 'Quezaltepeque', 4),
(142, 'Sacacoyo', 4),
(143, 'San José Villanueva', 4),
(144, 'San Matías', 4),
(145, 'San Pablo Tacachico', 4),
(146, 'Talnique', 4),
(147, 'Tamanique', 4),
(148, 'Teotepeque', 4),
(149, 'Tepecoyo', 4),
(150, 'Zaragoza', 4),
(151, 'Agua Caliente', 5),
(152, 'Arcatao', 5),
(153, 'Azacualpa', 5),
(154, 'Cancasque', 5),
(155, 'Chalatenango', 5),
(156, 'Citalá', 5),
(157, 'Comapala', 5),
(158, 'Concepción Quezaltepeque', 5),
(159, 'Dulce Nombre de María', 5),
(160, 'El Carrizal', 5),
(161, 'El Paraíso', 5),
(162, 'La Laguna', 5),
(163, 'La Palma', 5),
(164, 'La Reina', 5),
(165, 'Las Vueltas', 5),
(166, 'Nueva Concepción', 5),
(167, 'Nueva Trinidad', 5),
(168, 'Nombre de Jesús', 5),
(169, 'Ojos de Agua', 5),
(170, 'Potonico', 5),
(171, 'San Antonio de la Cruz', 5),
(172, 'San Antonio Los Ranchos', 5),
(173, 'San Fernando (Chalatenango)', 5),
(174, 'San Francisco Lempa', 5),
(175, 'San Francisco Morazán', 5),
(176, 'San Ignacio', 5),
(177, 'San Isidro Labrador', 5),
(178, 'Las Flores', 5),
(179, 'San Luis del Carmen', 5),
(180, 'San Miguel de Mercedes', 5),
(181, 'San Rafael', 5),
(182, 'Santa Rita', 5),
(183, 'Tejutla', 5),
(184, 'Cojutepeque', 7),
(185, 'Candelaria', 7),
(186, 'El Carmen (Cuscatlán)', 7),
(187, 'El Rosario (Cuscatlán)', 7),
(188, 'Monte San Juan', 7),
(189, 'Oratorio de Concepción', 7),
(190, 'San Bartolomé Perulapía', 7),
(191, 'San Cristóbal', 7),
(192, 'San José Guayabal', 7),
(193, 'San Pedro Perulapán', 7),
(194, 'San Rafael Cedros', 7),
(195, 'San Ramón', 7),
(196, 'Santa Cruz Analquito', 7),
(197, 'Santa Cruz Michapa', 7),
(198, 'Suchitoto', 7),
(199, 'Tenancingo', 7),
(200, 'Aguilares', 6),
(201, 'Apopa', 6),
(202, 'Ayutuxtepeque', 6),
(203, 'Cuscatancingo', 6),
(204, 'Ciudad Delgado', 6),
(205, 'El Paisnal', 6),
(206, 'Guazapa', 6),
(207, 'Ilopango', 6),
(208, 'Mejicanos', 6),
(209, 'Nejapa', 6),
(210, 'Panchimalco', 6),
(211, 'Rosario de Mora', 6),
(212, 'San Marcos', 6),
(213, 'San Martín', 6),
(214, 'San Salvador', 6),
(215, 'Santiago Texacuangos', 6),
(216, 'Santo Tomás', 6),
(217, 'Soyapango', 6),
(218, 'Tonacatepeque', 6),
(219, 'Zacatecoluca', 8),
(220, 'Cuyultitán', 8),
(221, 'El Rosario (La Paz)', 8),
(222, 'Jerusalén', 8),
(223, 'Mercedes La Ceiba', 8),
(224, 'Olocuilta', 8),
(225, 'Paraíso de Osorio', 8),
(226, 'San Antonio Masahuat', 8),
(227, 'San Emigdio', 8),
(228, 'San Francisco Chinameca', 8),
(229, 'San Pedro Masahuat', 8),
(230, 'San Juan Nonualco', 8),
(231, 'San Juan Talpa', 8),
(232, 'San Juan Tepezontes', 8),
(233, 'San Luis La Herradura', 8),
(234, 'San Luis Talpa', 8),
(235, 'San Miguel Tepezontes', 8),
(236, 'San Pedro Nonualco', 8),
(237, 'San Rafael Obrajuelo', 8),
(238, 'Santa María Ostuma', 8),
(239, 'Santiago Nonualco', 8),
(240, 'Tapalhuaca', 8),
(241, 'Cinquera', 9),
(242, 'Dolores', 9),
(243, 'Guacotecti', 9),
(244, 'Ilobasco', 9),
(245, 'Jutiapa', 9),
(246, 'San Isidro (Cabañas)', 9),
(247, 'Sensuntepeque', 9),
(248, 'Tejutepeque', 9),
(249, 'Victoria', 9),
(250, 'Apastepeque', 10),
(251, 'Guadalupe', 10),
(252, 'San Cayetano Istepeque', 10),
(253, 'San Esteban Catarina', 10),
(254, 'San Ildefonso', 10),
(255, 'San Lorenzo', 10),
(256, 'San Sebastián', 10),
(257, 'San Vicente', 10),
(258, 'Santa Clara', 10),
(259, 'Santo Domingo', 10),
(260, 'Tecoluca', 10),
(261, 'Tepetitán', 10),
(262, 'Verapaz', 10);


INSERT INTO `tipo_institucions` (`id`, `tipo_institucion`) VALUES
(1, 'Empresa Privada'),
(2, 'Gobierno'),
(3, 'Universidad'),
(4, 'Alcaldía'),
(5, 'Fundación'),
(6, 'Cooperativa'),
(7, 'Asociación'),
(8, 'Corporación'),
(9, 'Iglesia');


INSERT INTO `sectors` (`id`, `nombre_sector`) VALUES
(1, 'Público'),
(2, 'Privado'),
(3, 'Social');


INSERT INTO `sexos` (`id`, `sexo`) VALUES
('1', 'Femenino'),
('2', 'Masculino');


-- DATOS DE PRUEBA

INSERT INTO `estudiantes` (`carne`, `nombres`, `apellidos`, `fecha_nacimiento`, `dui`, `direccion`, `email`, `telefono`, `area_id`, `codigo`, `sexo_id`, `municipio_id`, `departamento_id`, `estado_servicio`, `horas_registradas`, `created_at`, `updated_at`) VALUES
('BR14005', 'Esperanza Areli', 'Bonilla Ramos', '2000-01-01', '11223344-5', 'Direccion 1', 'br14005@ues.edu.sv', '1111-1111', 1, 'L10801', 1, 214, 6, 'No iniciado', 0, '2020-09-21 07:44:33', '2020-09-21 07:44:33'),
('CL11004', 'María Gabriela', 'Chávez López', '1990-08-04', '07832232-1', 'Col. Bella vista', 'cl11004@ues.edu.sv', '2467-2368', 2, 'L10801', 1, 219, 8, 'Iniciado', 250, '2020-11-12 22:34:58', '2020-11-13 23:55:58'),
('CP12005', 'Karen Vanesa', 'Cardona Pérez', '1993-02-15', '12345678-2', 'Calle El Matazano', 'prueba@example.com', '7123-2356', 1, 'L10802', 1, 17, 2, 'No iniciado', 0, '2020-10-17 17:06:05', '2020-10-17 17:06:05'),
('GC14057', 'Arleny Raquel', 'García Claros', '2000-01-01', '11223344-6', 'Direccion 2', 'gc14057@ues.edu.sv', '2222-2222', 1, 'L10802', 1, 214, 6, 'Iniciado', 500, '2020-09-21 07:44:34', '2020-09-26 00:57:19'),
('HE12002', 'Grace Gisselle', 'Hernández Escobar', '1995-05-12', '12345678-7', 'Dirección 1', 'grace@gmail.com', '7123-2356', 1, 'D10801', 1, 14, 2, 'No iniciado', 0, '2020-10-12 22:33:54', '2020-10-12 22:33:54'),
('LA15006', 'Jocelyn Iveth', 'López Acosta', '1994-12-13', '01234567-6', 'Col. La Ceiba', 'la15006@ues.edu.sv', '2467-9023', 1, 'L10802', 1, 214, 6, 'Iniciado', 0, '2020-09-26 01:59:56', '2020-09-26 02:06:14'),
('MH11066', 'Elmer Alexander', 'Mejía Huiza', '2000-01-01', '11223344-7', 'Direccion 3', 'mh11066@ues.edu.sv', '3333-3333', 1, 'L10803', 2, 214, 6, 'Iniciado', 500, '2020-09-21 07:44:35', '2020-09-25 23:37:14'),
('PA06010', 'Karen Elvira', 'Peñate Aviles', '1987-10-24', '99999999-9', 'fafafda afafdafafdasfdasf', 'karen.penate@ues.edu.sv', '2276-1821', 1, 'D10801', 1, 1, 1, 'Iniciado', 40, '2020-09-28 20:20:52', '2020-09-28 20:26:16'),
('RP16062', 'Samantha Alexandra', 'Romero Marínez', '1999-02-14', '12345678-5', 'Calle El Litoral', 'samladyblue@hotmail.com', '7123-2356', 2, 'L10801', 1, 14, 2, 'Iniciado', 500, '2020-10-15 15:54:42', '2020-10-15 16:23:27'),
('SS15027', 'Nahara Jazmín', 'Sandoval Serrano', '1995-04-15', '24536871-4', 'Calle El Litoral', 'prueba@example.com', '7123-2356', 4, 'M10807', 1, 28, 3, 'No iniciado', 0, '2020-10-15 16:05:40', '2020-10-15 16:05:40'),
('VR12015', 'Jessica Esmeralda', 'Vides Romero', '2000-01-01', '11223344-8', 'Direccion 4', 'vr12015@ues.edu.sv', '4444-4444', 1, 'L10804', 1, 214, 6, 'Iniciado', 510, '2020-09-21 07:44:36', '2020-11-12 21:40:42'),
('VR15004', 'Alfredo Alexander', 'Villeda Romero', '2000-01-01', '11223344-9', 'Direccion 5', 'vr15004@ues.edu.sv', '5555-5555', 1, 'M10809', 2, 214, 6, 'No iniciado', 0, '2020-09-21 07:44:37', '2020-09-21 07:44:37');


INSERT INTO `institucions` (`id`, `nombre`, `tipo_institucion_id`, `direccion`, `id_region`, `id_departamento`, `id_municipio`, `sector_id`, `created_at`, `updated_at`) VALUES
(1, 'Ciencias Económicas', 1, 'Ciudad Universitaria, UES', 2, 6, 214, 1, '2020-07-14 20:53:32', '2020-07-14 20:54:23'),
(2, 'Distribuidora de azúcar y derivados, SA de CV', 1, 'Ave y Pje Las Bugavilias, N 15 A, Col San Francisco', 2, 6, 214, 2, '2020-07-15 10:01:38', '2020-07-15 10:44:39'),
(3, 'INDUSTRIAS EL LIBANO, SA DE CV', 1, 'CALLE CIRIACO LOPEZ Y 4A AVE NORTE, #19, DIUDAD DELGADO', 2, 6, 214, 2, '2020-07-15 10:52:08', '2020-07-15 11:04:59'),
(4, 'GIBIT TECHNOLOGIES, SA DE CV', 1, '87 AVE NORTE, N 162, COL ESCALON', 2, 6, 214, 2, '2020-07-15 10:54:36', '2020-07-15 11:05:09'),
(5, 'SWISSCONTACT', 1, 'RES Y CALLE ESCALONIA, CASA 14E, COL ESCALON', 2, 6, 214, 1, '2020-07-15 10:55:45', '2020-07-15 11:05:19'),
(6, 'GRUPO GEVISA, ARTES GRAFICAS', 1, '73 AVE SUR 339-BIS COL ESCALON', 2, 6, 214, 2, '2020-07-15 10:56:35', '2020-07-15 11:05:59'),
(7, 'Ministerio de Hacienda', 2, 'CONDOMINIO TRES TORRES, AVE ALVARADO Y DIAGONAL CENTROAMERICA, TORRE 1, NIVEL 3, ALA C', 2, 6, 214, 1, '2020-07-15 11:09:20', '2020-07-15 11:10:22'),
(8, 'COMISION EJECUTIVA PORTUARIA AUTONOMA', 2, 'Edificio Torre Roble', 2, 6, 214, 1, '2020-07-15 11:12:06', '2020-07-15 11:12:06'),
(9, 'COMISION DE LA MICRO Y PEQUEÑA EMPRESA, CONAMYPE', 2, '19 AVE NORTE Y ALAMEDA JUAN PABLO II', 2, 6, 214, 1, '2020-07-15 11:13:16', '2020-07-15 11:13:16'),
(10, 'MAESTRIA EN CONSULTORIA EMPRESARIAL, MAECE', 3, 'Ciudad Universitaria', 2, 6, 214, 3, '2020-07-15 11:13:54', '2020-07-15 11:16:23'),
(11, 'ADMINISTRACION DE CUOTAS DE MATRICULAS Y ESCOLARIDAD, ACME', 3, 'Ciudad Universitaria', 2, 6, 214, 3, '2020-07-15 11:14:42', '2020-07-15 11:14:42'),
(12, 'Alcaldía municipal de Quezaltepeque', 4, '2a. Calle Poniente y Avenida José María Castro, Barrio El Centro', 2, 4, 141, 1, '2020-07-15 11:19:40', '2020-07-15 11:19:40'),
(13, 'FUNDACION NUEVOS HORIZONTES PARA LOS POBRES', 5, 'KM 7 1/2 CARRETERA TRONCAL DEL NORTE, FINAL PJE JUAREZ', 2, 6, 204, 1, '2020-07-15 11:21:13', '2020-07-15 11:21:13'),
(14, 'ASOCIACION COOPERATIVA DE COMERCIALIZACION, PRODUCCION, AHORRO Y CREDITO DE LOS APICULTORES DE CHALATENANGO DE RL', 7, 'KM 59 1/2 CARRETERA LONGITUDINAL DEL NORTE, CAS ARRACAOS, CANTON CHILAMATES, NUEVA CONCEPCION, CHALATENANGO', 2, 5, 166, 2, '2020-07-15 11:37:54', '2020-07-15 11:37:54');


INSERT INTO `proyectos` (`id`, `nombre`, `area_de_conocimiento`, `objetivos`, `logros`, `id_institucion`, `cantidad_de_estudiantes`, `nombre_encargado`, `telefono`, `email`, `codigo_carrera`, `estado_proyecto`, `estudiantes_inscritos`, `created_at`, `updated_at`) VALUES
-- (1, 'Asistente Contable', 'Asesoría y asistencia técnica', 'Apoyar a la institución de manera objetiva', 'Fortalecer los conocimientos en el área financiera', '1', 5, 'Licda. Sara Méndez', '2467-9023', 'saramdnz@gmail.com', 'L10804', 'Disponible', 2, NULL, '2020-09-25 23:50:07'),
-- (2, 'Auxiliar Contable', 'Asistencia técnica', 'Apoyar a la empresa de manera objetiva', 'Fortalecer los conocimientos en el área financiera', '5', 8, 'Licda. Ines Gonzales', '7812-3647', 'inecita96@gmail.com', 'L10803', 'Disponible', 4, NULL, '2020-09-25 23:36:26'),
(3, 'Tutoria Administracion 2', 'Administracion', 'Ofrecer a los estudiantes una guia para la asignatura', 'Crecer como estudiante', '10', 2, 'Lic. Mayorga', '2564-3697', 'invitado@gmail.com', 'L10801', 'Disponible', 2, '2020-09-26 00:02:25', '2020-11-13 23:52:53'),
(4, 'Apoyo en actividades contables', 'Asesoría y asistencia técnica', 'Conocer las actividades de la empresa', 'Actualización del registro contable', '4', 1, 'Lic. André Guardado', '2274-1370', 'andre.guardado@gmail.com', 'L10802', 'Disponible', 1, '2020-09-26 00:06:50', '2020-09-26 02:06:13'),
(5, 'Apoyo en el departamento de colecturia', 'Asesoría y asistencia técnica', 'Apoyar a la institución de manera significativa', 'Conocer el control de los fondos manejados', '7', 6, 'Lic. Josué Acosta', '3434-8465', 'josueacosta@pyme.org', 'L10803', 'Disponible', 0, '2020-09-26 01:04:22', '2020-09-26 01:04:22'),
(6, 'Diplomado en administración financiera', 'Fortalecimiento académico', 'Aplicar los conocimientos teóricos y prácticos', 'Capacitar a los estudiantes', '1', 44, 'Lic. Alexander Carcamo', '2344-7659', 'alexandercarcamo@gmail.com', 'M10807', 'Disponible', 0, '2020-09-26 01:08:41', '2020-09-26 01:08:41'),
(7, 'Curso de refuerzo académico en línea para aspirantes nuevo ingreso 2021', 'Asesoría y asistencia técnica', 'Apoyar a la unidad de nuevo ingreso', 'Apoyo en la unidad', '1', 10, 'Licda. Julia Díaz', '2274-5618', 'julia@outlook.com', 'L10802', 'Disponible', 0, '2020-09-26 01:13:08', '2020-09-26 01:13:08'),
(8, 'Departamento de fondos especiales y en deposito, de la división de fondos ajenos y en custudia', 'Asesoría y asistencia técnica', 'Conocer las actividades de la empresa', 'Actualizar todos los expedientes', '14', 5, 'Licda. Carol Jiménez', '2258-3128', 'jmzcarol@gmail.com', 'L10802', 'Disponible', 0, '2020-09-26 01:28:08', '2020-09-26 01:28:08'),
(9, 'Clubes educativos', 'Asesoría y asistencia técnica', 'Contribuir al desarrollo integral', 'Colaboración con los estudiantes', '5', 5, 'Licda. Sophia Rivera', '2213-6734', 'soph.rivera@outlook.com', 'L10803', 'Disponible', 0, '2020-09-26 01:33:49', '2020-09-26 01:33:49'),
(10, 'Apoyo en el área administrativa', 'Asesoría y asistencia técnica', 'Diseñar e implementar procedimientos y bases de datos', 'Brindar a la comunidad estudiantil de la UES', '1', 3, 'Licda. Carmen Rivas', '2567-0034', 'carmen.rivas@ues.edu.sv', 'L10801', 'Disponible', 0, '2020-09-26 01:39:39', '2020-09-26 01:39:39'),
(11, 'Nuevo proyecto para prueba', 'Area de conocimiento Proyecto', 'objetivo del proyecto', 'logros del proyecto', '1', 2, 'Licenciado Encargado', '2276-1821', 'karen.penate@ues.edu.sv', 'D10801', 'Disponible', 1, '2020-09-28 20:22:44', '2020-09-28 20:24:02');

