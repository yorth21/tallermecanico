-- Departamentos

INSERT INTO `departamentos` (`iddepto`, `departamento`) VALUES
('05', 'Antioquia'),
('08', 'Atlántico'),
('11', 'Bogotá D.C.'),
('13', 'Bolívar'),
('15', 'Boyacá'),
('17', 'Caldas'),
('18', 'Caquetá'),
('19', 'Cauca'),
('20', 'Cesar'),
('23', 'Córdoba'),
('25', 'Cundinamarca'),
('27', 'Chocó'),
('41', 'Huila'),
('44', 'La Guajira'),
('47', 'Magdalena'),
('50', 'Meta'),
('52', 'Nariño'),
('54', 'Norte de Santander'),
('63', 'Quindío'),
('66', 'Risaralda'),
('68', 'Santander'),
('70', 'Sucre'),
('73', 'Tolima'),
('76', 'Valle del Cauca'),
('81', 'Arauca'),
('85', 'Casanare'),
('86', 'Putumayo'),
('88', 'San Andrés'),
('91', 'Amazonas'),
('94', 'Guainía'),
('95', 'Guaviare'),
('97', 'Vaupés'),
('99', 'Vichada');

-- Municipios

INSERT INTO `municipios` (`idmunicipio`, `municipio`, `iddepto`) VALUES
('05001', 'Medellín', '05'),
('05002', 'Abejorral', '05'),
('05004', 'Abriaquí', '05'),
('05021', 'Alejandria', '05'),
('05030', 'Amagá', '05'),
('05031', 'Amalfi', '05'),
('05034', 'Andes', '05'),
('05036', 'Angelópolis', '05'),
('05038', 'Angostura', '05'),
('05040', 'Anorí', '05'),
('05042', 'Santa Fé de Antioqui', '05'),
('05044', 'Anzá', '05'),
('05045', 'Apartadó', '05'),
('05051', 'Arboletes', '05'),
('05055', 'Argelia', '05'),
('05059', 'Armenia', '05'),
('05079', 'Barbosa', '05'),
('05086', 'Belmira', '05'),
('05088', 'Bello', '05'),
('05091', 'Betania', '05'),
('05093', 'Betulia', '05'),
('05101', 'Bolívar', '05'),
('05107', 'Briceño', '05'),
('05113', 'Burítica', '05'),
('05120', 'Cáceres', '05'),
('05125', 'Caicedo', '05'),
('05129', 'Caldas', '05'),
('05134', 'Campamento', '05'),
('05138', 'Cañasgordas', '05'),
('05142', 'Caracolí', '05'),
('05145', 'Caramanta', '05'),
('05147', 'Carepa', '05'),
('05148', 'Carmen de Viboral', '05'),
('05150', 'Carolina', '05'),
('05154', 'Caucasia', '05'),
('05172', 'Chigorodó', '05'),
('05190', 'Cisneros', '05'),
('05197', 'Cocorná', '05'),
('05206', 'Concepción', '05'),
('05209', 'Concordia', '05'),
('05212', 'Copacabana', '05'),
('05234', 'Dabeiba', '05'),
('05237', 'Don Matías', '05'),
('05240', 'Ebéjico', '05'),
('05250', 'El Bagre', '05'),
('05264', 'Entrerríos', '05'),
('05266', 'Envigado', '05'),
('05282', 'Fredonia', '05'),
('05284', 'Frontino', '05'),
('05306', 'Giraldo', '05'),
('05308', 'Girardota', '05'),
('05310', 'Gómez Plata', '05'),
('05313', 'Granada', '05'),
('05315', 'Guadalupe', '05'),
('05318', 'Guarne', '05'),
('05321', 'Guatapé', '05'),
('05347', 'Heliconia', '05'),
('05353', 'Hispania', '05'),
('05360', 'Itagüí', '05'),
('05361', 'Ituango', '05'),
('05364', 'Jardín', '05'),
('05368', 'Jericó', '05'),
('05376', 'La Ceja', '05'),
('05380', 'La Estrella', '05'),
('05390', 'La Pintada', '05'),
('05400', 'La Unión', '05'),
('05411', 'Liborina', '05'),
('05425', 'Maceo', '05'),
('05440', 'Marinilla', '05'),
('05467', 'Montebello', '05'),
('05475', 'Murindó', '05'),
('05480', 'Mutatá', '05'),
('05483', 'Nariño', '05'),
('05490', 'Necoclí', '05'),
('05495', 'Nechí', '05'),
('05501', 'Olaya', '05'),
('05541', 'Peñol', '05'),
('05543', 'Peque', '05'),
('05576', 'Pueblorrico', '05'),
('05579', 'Puerto Berrío', '05'),
('05585', 'Puerto Nare', '05'),
('05591', 'Puerto Triunfo', '05'),
('05604', 'Remedios', '05'),
('05607', 'Retiro', '05'),
('05615', 'Ríonegro', '05'),
('05628', 'Sabanalarga', '05'),
('05631', 'Sabaneta', '05'),
('05642', 'Salgar', '05'),
('05647', 'San Andrés de Cuerqu', '05'),
('05649', 'San Carlos', '05'),
('05652', 'San Francisco', '05'),
('05656', 'San Jerónimo', '05'),
('05658', 'San José de Montaña', '05'),
('05659', 'San Juan de Urabá', '05'),
('05660', 'San Luís', '05'),
('05664', 'San Pedro', '05'),
('05665', 'San Pedro de Urabá', '05'),
('05667', 'San Rafael', '05'),
('05670', 'San Roque', '05'),
('05674', 'San Vicente', '05'),
('05679', 'Santa Bárbara', '05'),
('05686', 'Santa Rosa de Osos', '05'),
('05690', 'Santo Domingo', '05'),
('05697', 'Santuario', '05'),
('05736', 'Segovia', '05'),
('05756', 'Sonsón', '05'),
('05761', 'Sopetrán', '05'),
('05789', 'Támesis', '05'),
('05790', 'Tarazá', '05'),
('05792', 'Tarso', '05'),
('05809', 'Titiribí', '05'),
('05819', 'Toledo', '05'),
('05837', 'Turbo', '05'),
('05842', 'Uramita', '05'),
('05847', 'Urrao', '05'),
('05854', 'Valdivia', '05'),
('05856', 'Valparaiso', '05'),
('05858', 'Vegachí', '05'),
('05861', 'Venecia', '05'),
('05873', 'Vigía del Fuerte', '05'),
('05885', 'Yalí', '05'),
('05887', 'Yarumal', '05'),
('05890', 'Yolombó', '05'),
('05893', 'Yondó (Casabe)', '05'),
('05895', 'Zaragoza', '05'),
('08001', 'Barranquilla', '08'),
('08078', 'Baranoa', '08'),
('08132', 'Juan de Acosta', '08'),
('08137', 'Campo de la Cruz', '08'),
('08141', 'Candelaria', '08'),
('08296', 'Galapa', '08'),
('08421', 'Luruaco', '08'),
('08433', 'Malambo', '08'),
('08436', 'Manatí', '08'),
('08520', 'Palmar de Varela', '08'),
('08549', 'Piojo', '08'),
('08558', 'Polonuevo', '08'),
('08560', 'Ponedera', '08'),
('08573', 'Puerto Colombia', '08'),
('08606', 'Repelón', '08'),
('08634', 'Sabanagrande', '08'),
('08638', 'Sabanalarga', '08'),
('08675', 'Santa Lucía', '08'),
('08685', 'Santo Tomás', '08'),
('08758', 'Soledad', '08'),
('08770', 'Suan', '08'),
('08832', 'Tubará', '08'),
('08849', 'Usiacuri', '08'),
('11001', 'Bogotá D.C.', '11'),
('13001', 'Cartagena', '13'),
('13006', 'Achí', '13'),
('13030', 'Altos del Rosario', '13'),
('13042', 'Arenal', '13'),
('13052', 'Arjona', '13'),
('13062', 'Arroyohondo', '13'),
('13074', 'Barranco de Loba', '13'),
('13140', 'Calamar', '13'),
('13160', 'Cantagallo', '13'),
('13188', 'Cicuco', '13'),
('13212', 'Córdoba', '13'),
('13222', 'Clemencia', '13'),
('13244', 'El Carmen de Bolívar', '13'),
('13248', 'El Guamo', '13'),
('13268', 'El Peñon', '13'),
('13300', 'Hatillo de Loba', '13'),
('13430', 'Magangué', '13'),
('13433', 'Mahates', '13'),
('13440', 'Margarita', '13'),
('13442', 'María la Baja', '13'),
('13458', 'Montecristo', '13'),
('13468', 'Mompós', '13'),
('13473', 'Morales', '13'),
('13490', 'Norosí', '13'),
('13549', 'Pinillos', '13'),
('13580', 'Regidor', '13'),
('13600', 'Río Viejo', '13'),
('13620', 'San Cristobal', '13'),
('13647', 'San Estanislao', '13'),
('13650', 'San Fernando', '13'),
('13654', 'San Jacinto', '13'),
('13655', 'San Jacinto del Cauc', '13'),
('13657', 'San Juan de Nepomuce', '13'),
('13667', 'San Martín de Loba', '13'),
('13670', 'San Pablo', '13'),
('13673', 'Santa Catalina', '13'),
('13683', 'Santa Rosa', '13'),
('13688', 'Santa Rosa del Sur', '13'),
('13744', 'Simití', '13'),
('13760', 'Soplaviento', '13'),
('13780', 'Talaigua Nuevo', '13'),
('13810', 'Tiquisio (Puerto Ric', '13'),
('13836', 'Turbaco', '13'),
('13838', 'Turbaná', '13'),
('13873', 'Villanueva', '13'),
('13894', 'Zambrano', '13'),
('15001', 'Tunja', '15'),
('15022', 'Almeida', '15'),
('15047', 'Aquitania', '15'),
('15051', 'Arcabuco', '15'),
('15087', 'Belén', '15'),
('15090', 'Berbeo', '15'),
('15092', 'Beteitiva', '15'),
('15097', 'Boavita', '15'),
('15104', 'Boyacá', '15'),
('15106', 'Briceño', '15'),
('15109', 'Buenavista', '15'),
('15114', 'Busbanza', '15'),
('15131', 'Caldas', '15'),
('15135', 'Campohermoso', '15'),
('15162', 'Cerinza', '15'),
('15172', 'Chinavita', '15'),
('15176', 'Chiquinquirá', '15'),
('15180', 'Chiscas', '15'),
('15183', 'Chita', '15'),
('15185', 'Chitaraque', '15'),
('15187', 'Chivatá', '15'),
('15189', 'Ciénaga', '15'),
('15204', 'Cómbita', '15'),
('15212', 'Coper', '15'),
('15215', 'Corrales', '15'),
('15218', 'Covarachía', '15'),
('15223', 'Cubará', '15'),
('15224', 'Cucaita', '15'),
('15226', 'Cuitiva', '15'),
('15232', 'Chíquiza', '15'),
('15236', 'Chívor', '15'),
('15238', 'Duitama', '15'),
('15244', 'El Cocuy', '15'),
('15248', 'El Espino', '15'),
('15272', 'Firavitoba', '15'),
('15276', 'Floresta', '15'),
('15293', 'Gachantivá', '15'),
('15296', 'Gámeza', '15'),
('15299', 'Garagoa', '15'),
('15317', 'Guacamayas', '15'),
('15322', 'Guateque', '15'),
('15325', 'Guayatá', '15'),
('15332', 'Guicán', '15'),
('15362', 'Izá', '15'),
('15367', 'Jenesano', '15'),
('15368', 'Jericó', '15'),
('15377', 'Labranzagrande', '15'),
('15380', 'La Capilla', '15'),
('15401', 'La Victoria', '15'),
('15403', 'La Uvita', '15'),
('15407', 'Villa de Leiva', '15'),
('15425', 'Macanal', '15'),
('15442', 'Maripí', '15'),
('15455', 'Miraflores', '15'),
('15464', 'Mongua', '15'),
('15466', 'Monguí', '15'),
('15469', 'Moniquirá', '15'),
('15476', 'Motavita', '15'),
('15480', 'Muzo', '15'),
('15491', 'Nobsa', '15'),
('15494', 'Nuevo Colón', '15'),
('15500', 'Oicatá', '15'),
('15507', 'Otanche', '15'),
('15511', 'Pachavita', '15'),
('15514', 'Páez', '15'),
('15516', 'Paipa', '15'),
('15518', 'Pajarito', '15'),
('15522', 'Panqueba', '15'),
('15531', 'Pauna', '15'),
('15532', 'Paya', '15'),
('15537', 'Paz de Río', '15'),
('15542', 'Pesca', '15'),
('15550', 'Pisva', '15'),
('15572', 'Puerto Boyacá', '15'),
('15580', 'Quipama', '15'),
('15599', 'Ramiriquí', '15'),
('15600', 'Ráquira', '15'),
('15621', 'Rondón', '15'),
('15632', 'Saboyá', '15'),
('15638', 'Sáchica', '15'),
('15646', 'Samacá', '15'),
('15660', 'San Eduardo', '15'),
('15664', 'San José de Pare', '15'),
('15667', 'San Luís de Gaceno', '15'),
('15673', 'San Mateo', '15'),
('15676', 'San Miguel de Sema', '15'),
('15681', 'San Pablo de Borbur', '15'),
('15686', 'Santana', '15'),
('15690', 'Santa María', '15'),
('15693', 'Santa Rosa de Viterb', '15'),
('15696', 'Santa Sofía', '15'),
('15720', 'Sativanorte', '15'),
('15723', 'Sativasur', '15'),
('15740', 'Siachoque', '15'),
('15753', 'Soatá', '15'),
('15755', 'Socotá', '15'),
('15757', 'Socha', '15'),
('15759', 'Sogamoso', '15'),
('15761', 'Somondoco', '15'),
('15762', 'Sora', '15'),
('15763', 'Sotaquirá', '15'),
('15764', 'Soracá', '15'),
('15774', 'Susacón', '15'),
('15776', 'Sutamarchán', '15'),
('15778', 'Sutatenza', '15'),
('15790', 'Tasco', '15'),
('15798', 'Tenza', '15'),
('15804', 'Tibaná', '15'),
('15806', 'Tibasosa', '15'),
('15808', 'Tinjacá', '15'),
('15810', 'Tipacoque', '15'),
('15814', 'Toca', '15'),
('15816', 'Toguí', '15'),
('15820', 'Topagá', '15'),
('15822', 'Tota', '15'),
('15832', 'Tunungua', '15'),
('15835', 'Turmequé', '15'),
('15837', 'Tuta', '15'),
('15839', 'Tutasá', '15'),
('15842', 'Úmbita', '15'),
('15861', 'Ventaquemada', '15'),
('15879', 'Viracachá', '15'),
('15897', 'Zetaquirá', '15'),
('17001', 'Manizales', '17'),
('17013', 'Aguadas', '17'),
('17042', 'Anserma', '17'),
('17050', 'Aranzazu', '17'),
('17088', 'Belalcázar', '17'),
('17174', 'Chinchiná', '17'),
('17272', 'Filadelfia', '17'),
('17380', 'La Dorada', '17'),
('17388', 'La Merced', '17'),
('17433', 'Manzanares', '17'),
('17442', 'Marmato', '17'),
('17444', 'Marquetalia', '17'),
('17446', 'Marulanda', '17'),
('17486', 'Neira', '17'),
('17495', 'Norcasia', '17'),
('17513', 'Pácora', '17'),
('17524', 'Palestina', '17'),
('17541', 'Pensilvania', '17'),
('17614', 'Río Sucio', '17'),
('17616', 'Risaralda', '17'),
('17653', 'Salamina', '17'),
('17662', 'Samaná', '17'),
('17665', 'San José', '17'),
('17777', 'Supía', '17'),
('17867', 'La Victoria', '17'),
('17873', 'Villamaría', '17'),
('17877', 'Viterbo', '17'),
('18001', 'Florencia', '18'),
('18029', 'Albania', '18'),
('18094', 'Belén de los Andaquí', '18'),
('18150', 'Cartagena del Chairá', '18'),
('18205', 'Curillo', '18'),
('18247', 'El Doncello', '18'),
('18256', 'El Paujil', '18'),
('18410', 'La Montañita', '18'),
('18460', 'Milán', '18'),
('18479', 'Morelia', '18'),
('18592', 'Puerto Rico', '18'),
('18610', 'San José del Fragua', '18'),
('18753', 'San Vicente del Cagu', '18'),
('18765', 'Solano', '18'),
('18785', 'Solita', '18'),
('18860', 'Valparaiso', '18'),
('19001', 'Popayán', '19'),
('19022', 'Almaguer', '19'),
('19050', 'Argelia', '19'),
('19075', 'Balboa', '19'),
('19100', 'Bolívar', '19'),
('19110', 'Buenos Aires', '19'),
('19130', 'Cajibío', '19'),
('19137', 'Caldono', '19'),
('19142', 'Caloto', '19'),
('19212', 'Corinto', '19'),
('19256', 'El Tambo', '19'),
('19290', 'Florencia', '19'),
('19300', 'Guachené', '19'),
('19318', 'Guapí', '19'),
('19355', 'Inzá', '19'),
('19364', 'Jambaló', '19'),
('19392', 'La Sierra', '19'),
('19397', 'La Vega', '19'),
('19418', 'López (Micay)', '19'),
('19450', 'Mercaderes', '19'),
('19455', 'Miranda', '19'),
('19473', 'Morales', '19'),
('19513', 'Padilla', '19'),
('19517', 'Páez (Belalcazar)', '19'),
('19532', 'Patía (El Bordo)', '19'),
('19533', 'Piamonte', '19'),
('19548', 'Piendamó', '19'),
('19573', 'Puerto Tejada', '19'),
('19585', 'Puracé (Coconuco)', '19'),
('19622', 'Rosas', '19'),
('19693', 'San Sebastián', '19'),
('19698', 'Santander de Quilich', '19'),
('19701', 'Santa Rosa', '19'),
('19743', 'Silvia', '19'),
('19760', 'Sotara (Paispamba)', '19'),
('19780', 'Suárez', '19'),
('19785', 'Sucre', '19'),
('19807', 'Timbío', '19'),
('19809', 'Timbiquí', '19'),
('19821', 'Toribío', '19'),
('19824', 'Totoró', '19'),
('19845', 'Villa Rica', '19'),
('20001', 'Valledupar', '20'),
('20011', 'Aguachica', '20'),
('20013', 'Agustín Codazzi', '20'),
('20032', 'Astrea', '20'),
('20045', 'Becerríl', '20'),
('20060', 'Bosconia', '20'),
('20175', 'Chimichagua', '20'),
('20178', 'Chiriguaná', '20'),
('20228', 'Curumaní', '20'),
('20238', 'El Copey', '20'),
('20250', 'El Paso', '20'),
('20295', 'Gamarra', '20'),
('20310', 'Gonzalez', '20'),
('20383', 'La Gloria', '20'),
('20400', 'La Jagua de Ibirico', '20'),
('20443', 'Manaure Balcón del C', '20'),
('20517', 'Pailitas', '20'),
('20550', 'Pelaya', '20'),
('20570', 'Pueblo Bello', '20'),
('20614', 'Río de oro', '20'),
('20621', 'La Paz (Robles)', '20'),
('20710', 'San Alberto', '20'),
('20750', 'San Diego', '20'),
('20770', 'San Martín', '20'),
('20787', 'Tamalameque', '20'),
('23001', 'Monteria', '23'),
('23068', 'Ayapel', '23'),
('23079', 'Buenavista', '23'),
('23090', 'Canalete', '23'),
('23162', 'Cereté', '23'),
('23168', 'Chimá', '23'),
('23182', 'Chinú', '23'),
('23189', 'Ciénaga de Oro', '23'),
('23300', 'Cotorra', '23'),
('23350', 'La Apartada y La Fro', '23'),
('23417', 'Lorica', '23'),
('23419', 'Los Córdobas', '23'),
('23464', 'Momil', '23'),
('23466', 'Montelíbano', '23'),
('23500', 'Moñitos', '23'),
('23555', 'Planeta Rica', '23'),
('23570', 'Pueblo Nuevo', '23'),
('23574', 'Puerto Escondido', '23'),
('23580', 'Puerto Libertador', '23'),
('23586', 'Purísima', '23'),
('23660', 'Sahagún', '23'),
('23670', 'San Andrés Sotavento', '23'),
('23672', 'San Antero', '23'),
('23675', 'San Bernardo del Vie', '23'),
('23678', 'San Carlos', '23'),
('23682', 'San José de Uré', '23'),
('23686', 'San Pelayo', '23'),
('23807', 'Tierralta', '23'),
('23815', 'Tuchín', '23'),
('23855', 'Valencia', '23'),
('25001', 'Agua de Dios', '25'),
('25019', 'Albán', '25'),
('25035', 'Anapoima', '25'),
('25040', 'Anolaima', '25'),
('25053', 'Arbeláez', '25'),
('25086', 'Beltrán', '25'),
('25095', 'Bituima', '25'),
('25099', 'Bojacá', '25'),
('25120', 'Cabrera', '25'),
('25123', 'Cachipay', '25'),
('25126', 'Cajicá', '25'),
('25148', 'Caparrapí', '25'),
('25151', 'Cáqueza', '25'),
('25154', 'Carmen de Carupa', '25'),
('25168', 'Chaguaní', '25'),
('25175', 'Chía', '25'),
('25178', 'Chipaque', '25'),
('25181', 'Choachí', '25'),
('25183', 'Chocontá', '25'),
('25200', 'Cogua', '25'),
('25214', 'Cota', '25'),
('25224', 'Cucunubá', '25'),
('25245', 'El Colegio', '25'),
('25258', 'El Peñón', '25'),
('25260', 'El Rosal', '25'),
('25269', 'Facatativá', '25'),
('25279', 'Fómeque', '25'),
('25281', 'Fosca', '25'),
('25286', 'Funza', '25'),
('25288', 'Fúquene', '25'),
('25290', 'Fusagasugá', '25'),
('25293', 'Gachalá', '25'),
('25295', 'Gachancipá', '25'),
('25297', 'Gachetá', '25'),
('25299', 'Gama', '25'),
('25307', 'Girardot', '25'),
('25312', 'Granada', '25'),
('25317', 'Guachetá', '25'),
('25320', 'Guaduas', '25'),
('25322', 'Guasca', '25'),
('25324', 'Guataquí', '25'),
('25326', 'Guatavita', '25'),
('25328', 'Guayabal de Siquima', '25'),
('25335', 'Guayabetal', '25'),
('25339', 'Gutiérrez', '25'),
('25368', 'Jerusalén', '25'),
('25372', 'Junín', '25'),
('25377', 'La Calera', '25'),
('25386', 'La Mesa', '25'),
('25394', 'La Palma', '25'),
('25398', 'La Peña', '25'),
('25402', 'La Vega', '25'),
('25407', 'Lenguazaque', '25'),
('25426', 'Machetá', '25'),
('25430', 'Madrid', '25'),
('25436', 'Manta', '25'),
('25438', 'Medina', '25'),
('25473', 'Mosquera', '25'),
('25483', 'Nariño', '25'),
('25486', 'Nemocón', '25'),
('25488', 'Nilo', '25'),
('25489', 'Nimaima', '25'),
('25491', 'Nocaima', '25'),
('25506', 'Venecia (Ospina Pére', '25'),
('25513', 'Pacho', '25'),
('25518', 'Paime', '25'),
('25524', 'Pandi', '25'),
('25530', 'Paratebueno', '25'),
('25535', 'Pasca', '25'),
('25572', 'Puerto Salgar', '25'),
('25580', 'Pulí', '25'),
('25592', 'Quebradanegra', '25'),
('25594', 'Quetame', '25'),
('25596', 'Quipile', '25'),
('25599', 'Apulo', '25'),
('25612', 'Ricaurte', '25'),
('25645', 'San Antonio de Teque', '25'),
('25649', 'San Bernardo', '25'),
('25653', 'San Cayetano', '25'),
('25658', 'San Francisco', '25'),
('25662', 'San Juan de Río Seco', '25'),
('25718', 'Sasaima', '25'),
('25736', 'Sesquilé', '25'),
('25740', 'Sibaté', '25'),
('25743', 'Silvania', '25'),
('25745', 'Simijaca', '25'),
('25754', 'Soacha', '25'),
('25758', 'Sopó', '25'),
('25769', 'Subachoque', '25'),
('25772', 'Suesca', '25'),
('25777', 'Supatá', '25'),
('25779', 'Susa', '25'),
('25781', 'Sutatausa', '25'),
('25785', 'Tabio', '25'),
('25793', 'Tausa', '25'),
('25797', 'Tena', '25'),
('25799', 'Tenjo', '25'),
('25805', 'Tibacuy', '25'),
('25807', 'Tibirita', '25'),
('25815', 'Tocaima', '25'),
('25817', 'Tocancipá', '25'),
('25823', 'Topaipí', '25'),
('25839', 'Ubalá', '25'),
('25841', 'Ubaque', '25'),
('25843', 'Ubaté', '25'),
('25845', 'Une', '25'),
('25851', 'Útica', '25'),
('25862', 'Vergara', '25'),
('25867', 'Viani', '25'),
('25871', 'Villagómez', '25'),
('25873', 'Villapinzón', '25'),
('25875', 'Villeta', '25'),
('25878', 'Viotá', '25'),
('25885', 'Yacopí', '25'),
('25888', 'Zipacón', '25'),
('25899', 'Zipaquirá', '25'),
('27001', 'Quibdó', '27'),
('27006', 'Acandí', '27'),
('27025', 'Alto Baudó (Pie de P', '27'),
('27050', 'Atrato (Yuto)', '27'),
('27073', 'Bagadó', '27'),
('27075', 'Bahía Solano (Mútis)', '27'),
('27077', 'Bajo Baudó (Pizarro)', '27'),
('27086', 'Belén de Bajirá', '27'),
('27099', 'Bojayá (Bellavista)', '27'),
('27135', 'Cantón de San Pablo', '27'),
('27150', 'Carmen del Darién (C', '27'),
('27160', 'Cértegui', '27'),
('27205', 'Condoto', '27'),
('27245', 'El Carmen de Atrato', '27'),
('27250', 'Santa Genoveva de Do', '27'),
('27361', 'Istmina', '27'),
('27372', 'Juradó', '27'),
('27413', 'Lloró', '27'),
('27425', 'Medio Atrato', '27'),
('27430', 'Medio Baudó', '27'),
('27450', 'Medio San Juan (ANDA', '27'),
('27491', 'Novita', '27'),
('27495', 'Nuquí', '27'),
('27580', 'Río Iró', '27'),
('27600', 'Río Quito', '27'),
('27615', 'Ríosucio', '27'),
('27660', 'San José del Palmar', '27'),
('27745', 'Sipí', '27'),
('27787', 'Tadó', '27'),
('27800', 'Unguía', '27'),
('27810', 'Unión Panamericana (', '27'),
('41001', 'Neiva', '41'),
('41006', 'Acevedo', '41'),
('41013', 'Agrado', '41'),
('41016', 'Aipe', '41'),
('41020', 'Algeciras', '41'),
('41026', 'Altamira', '41'),
('41078', 'Baraya', '41'),
('41132', 'Campoalegre', '41'),
('41206', 'Colombia', '41'),
('41244', 'Elías', '41'),
('41298', 'Garzón', '41'),
('41306', 'Gigante', '41'),
('41319', 'Guadalupe', '41'),
('41349', 'Hobo', '41'),
('41357', 'Íquira', '41'),
('41359', 'Isnos', '41'),
('41378', 'La Argentina', '41'),
('41396', 'La Plata', '41'),
('41483', 'Nátaga', '41'),
('41503', 'Oporapa', '41'),
('41518', 'Paicol', '41'),
('41524', 'Palermo', '41'),
('41530', 'Palestina', '41'),
('41548', 'Pital', '41'),
('41551', 'Pitalito', '41'),
('41615', 'Rivera', '41'),
('41660', 'Saladoblanco', '41'),
('41668', 'San Agustín', '41'),
('41676', 'Santa María', '41'),
('41770', 'Suaza', '41'),
('41791', 'Tarqui', '41'),
('41797', 'Tesalia', '41'),
('41799', 'Tello', '41'),
('41801', 'Teruel', '41'),
('41807', 'Timaná', '41'),
('41872', 'Villavieja', '41'),
('41885', 'Yaguará', '41'),
('44001', 'Riohacha', '44'),
('44035', 'Albania', '44'),
('44078', 'Barrancas', '44'),
('44090', 'Dibulla', '44'),
('44098', 'Distracción', '44'),
('44110', 'El Molino', '44'),
('44279', 'Fonseca', '44'),
('44378', 'Hatonuevo', '44'),
('44420', 'La Jagua del Pilar', '44'),
('44430', 'Maicao', '44'),
('44560', 'Manaure', '44'),
('44650', 'San Juan del Cesar', '44'),
('44847', 'Uribia', '44'),
('44855', 'Urumita', '44'),
('44874', 'Villanueva', '44'),
('47001', 'Santa Marta', '47'),
('47030', 'Algarrobo', '47'),
('47053', 'Aracataca', '47'),
('47058', 'Ariguaní (El Difícil', '47'),
('47161', 'Cerro San Antonio', '47'),
('47170', 'Chivolo', '47'),
('47189', 'Ciénaga', '47'),
('47205', 'Concordia', '47'),
('47245', 'El Banco', '47'),
('47258', 'El Piñon', '47'),
('47268', 'El Retén', '47'),
('47288', 'Fundación', '47'),
('47318', 'Guamal', '47'),
('47441', 'Pedraza', '47'),
('47460', 'Nueva Granada', '47'),
('47545', 'Pijiño', '47'),
('47551', 'Pivijay', '47'),
('47555', 'Plato', '47'),
('47570', 'Puebloviejo', '47'),
('47605', 'Remolino', '47'),
('47660', 'Sabanas de San Angel', '47'),
('47675', 'Salamina', '47'),
('47692', 'San Sebastián de Bue', '47'),
('47703', 'San Zenón', '47'),
('47707', 'Santa Ana', '47'),
('47720', 'Santa Bárbara de Pin', '47'),
('47745', 'Sitionuevo', '47'),
('47798', 'Tenerife', '47'),
('47960', 'Zapayán (PUNTA DE PI', '47'),
('47980', 'Zona Bananera (PRADO', '47'),
('50001', 'Villavicencio', '50'),
('50006', 'Acacías', '50'),
('50110', 'Barranca de Upía', '50'),
('50124', 'Cabuyaro', '50'),
('50150', 'Castilla la Nueva', '50'),
('50223', 'Cubarral', '50'),
('50226', 'Cumaral', '50'),
('50245', 'El Calvario', '50'),
('50251', 'El Castillo', '50'),
('50270', 'El Dorado', '50'),
('50287', 'Fuente de Oro', '50'),
('50313', 'Granada', '50'),
('50318', 'Guamal', '50'),
('50325', 'Mapiripan', '50'),
('50330', 'Mesetas', '50'),
('50350', 'La Macarena', '50'),
('50370', 'Uribe', '50'),
('50400', 'Lejanías', '50'),
('50450', 'Puerto Concordia', '50'),
('50568', 'Puerto Gaitán', '50'),
('50573', 'Puerto López', '50'),
('50577', 'Puerto Lleras', '50'),
('50590', 'Puerto Rico', '50'),
('50606', 'Restrepo', '50'),
('50680', 'San Carlos de Guaroa', '50'),
('50683', 'San Juan de Arama', '50'),
('50686', 'San Juanito', '50'),
('50689', 'San Martín', '50'),
('50711', 'Vista Hermosa', '50'),
('52001', 'San Juan de Pasto', '52'),
('52019', 'Albán (San José)', '52'),
('52022', 'Aldana', '52'),
('52036', 'Ancuya', '52'),
('52051', 'Arboleda (Berruecos)', '52'),
('52079', 'Barbacoas', '52'),
('52083', 'Belén', '52'),
('52110', 'Buesaco', '52'),
('52203', 'Colón (Génova)', '52'),
('52207', 'Consaca', '52'),
('52210', 'Contadero', '52'),
('52215', 'Córdoba', '52'),
('52224', 'Cuaspud (Carlosama)', '52'),
('52227', 'Cumbal', '52'),
('52233', 'Cumbitara', '52'),
('52240', 'Chachaguí', '52'),
('52250', 'El Charco', '52'),
('52254', 'El Peñol', '52'),
('52256', 'El Rosario', '52'),
('52258', 'El Tablón de Gómez', '52'),
('52260', 'El Tambo', '52'),
('52287', 'Funes', '52'),
('52317', 'Guachucal', '52'),
('52320', 'Guaitarilla', '52'),
('52323', 'Gualmatán', '52'),
('52352', 'Iles', '52'),
('52354', 'Imúes', '52'),
('52356', 'Ipiales', '52'),
('52378', 'La Cruz', '52'),
('52381', 'La Florida', '52'),
('52385', 'La Llanada', '52'),
('52390', 'La Tola', '52'),
('52399', 'La Unión', '52'),
('52405', 'Leiva', '52'),
('52411', 'Linares', '52'),
('52418', 'Sotomayor (Los Andes', '52'),
('52427', 'Magüi (Payán)', '52'),
('52435', 'Mallama (Piedrancha)', '52'),
('52473', 'Mosquera', '52'),
('52480', 'Nariño', '52'),
('52490', 'Olaya Herrera', '52'),
('52506', 'Ospina', '52'),
('52520', 'Francisco Pizarro', '52'),
('52540', 'Policarpa', '52'),
('52560', 'Potosí', '52'),
('52565', 'Providencia', '52'),
('52573', 'Puerres', '52'),
('52585', 'Pupiales', '52'),
('52612', 'Ricaurte', '52'),
('52621', 'Roberto Payán (San J', '52'),
('52678', 'Samaniego', '52'),
('52683', 'Sandoná', '52'),
('52685', 'San Bernardo', '52'),
('52687', 'San Lorenzo', '52'),
('52693', 'San Pablo', '52'),
('52694', 'San Pedro de Cartago', '52'),
('52695', 'Santa Bárbara (Iscua', '52'),
('52699', 'Guachavés', '52'),
('52720', 'Sapuyes', '52'),
('52786', 'Taminango', '52'),
('52788', 'Tangua', '52'),
('52835', 'Tumaco', '52'),
('52838', 'Túquerres', '52'),
('52885', 'Yacuanquer', '52'),
('54001', 'Cúcuta', '54'),
('54003', 'Ábrego', '54'),
('54051', 'Arboledas', '54'),
('54099', 'Bochalema', '54'),
('54109', 'Bucarasica', '54'),
('54125', 'Cácota', '54'),
('54128', 'Cáchira', '54'),
('54172', 'Chinácota', '54'),
('54174', 'Chitagá', '54'),
('54206', 'Convención', '54'),
('54223', 'Cucutilla', '54'),
('54239', 'Durania', '54'),
('54245', 'El Carmen', '54'),
('54250', 'El Tarra', '54'),
('54261', 'El Zulia', '54'),
('54313', 'Gramalote', '54'),
('54344', 'Hacarí', '54'),
('54347', 'Herrán', '54'),
('54377', 'Labateca', '54'),
('54385', 'La Esperanza', '54'),
('54398', 'La Playa', '54'),
('54405', 'Los Patios', '54'),
('54418', 'Lourdes', '54'),
('54480', 'Mutiscua', '54'),
('54498', 'Ocaña', '54'),
('54518', 'Pamplona', '54'),
('54520', 'Pamplonita', '54'),
('54553', 'Puerto Santander', '54'),
('54599', 'Ragonvalia', '54'),
('54660', 'Salazar', '54'),
('54670', 'San Calixto', '54'),
('54673', 'San Cayetano', '54'),
('54680', 'Santiago', '54'),
('54720', 'Sardinata', '54'),
('54743', 'Silos', '54'),
('54800', 'Teorama', '54'),
('54810', 'Tibú', '54'),
('54820', 'Toledo', '54'),
('54871', 'Villa Caro', '54'),
('54874', 'Villa del Rosario', '54'),
('63001', 'Armenia', '63'),
('63111', 'Buenavista', '63'),
('63130', 'Calarcá', '63'),
('63190', 'Circasia', '63'),
('63212', 'Cordobá', '63'),
('63272', 'Filandia', '63'),
('63302', 'Génova', '63'),
('63401', 'La Tebaida', '63'),
('63470', 'Montenegro', '63'),
('63548', 'Pijao', '63'),
('63594', 'Quimbaya', '63'),
('63690', 'Salento', '63'),
('66001', 'Pereira', '66'),
('66045', 'Apía', '66'),
('66075', 'Balboa', '66'),
('66088', 'Belén de Umbría', '66'),
('66170', 'Dos Quebradas', '66'),
('66318', 'Guática', '66'),
('66383', 'La Celia', '66'),
('66400', 'La Virginia', '66'),
('66440', 'Marsella', '66'),
('66456', 'Mistrató', '66'),
('66572', 'Pueblo Rico', '66'),
('66594', 'Quinchía', '66'),
('66682', 'Santa Rosa de Cabal', '66'),
('66687', 'Santuario', '66'),
('68001', 'Bucaramanga', '68'),
('68013', 'Aguada', '68'),
('68020', 'Albania', '68'),
('68051', 'Aratoca', '68'),
('68077', 'Barbosa', '68'),
('68079', 'Barichara', '68'),
('68081', 'Barrancabermeja', '68'),
('68092', 'Betulia', '68'),
('68101', 'Bolívar', '68'),
('68121', 'Cabrera', '68'),
('68132', 'California', '68'),
('68147', 'Capitanejo', '68'),
('68152', 'Carcasí', '68'),
('68160', 'Cepita', '68'),
('68162', 'Cerrito', '68'),
('68167', 'Charalá', '68'),
('68169', 'Charta', '68'),
('68176', 'Chima', '68'),
('68179', 'Chipatá', '68'),
('68190', 'Cimitarra', '68'),
('68207', 'Concepción', '68'),
('68209', 'Confines', '68'),
('68211', 'Contratación', '68'),
('68217', 'Coromoro', '68'),
('68229', 'Curití', '68'),
('68235', 'El Carmen', '68'),
('68245', 'El Guacamayo', '68'),
('68250', 'El Peñon', '68'),
('68255', 'El Playón', '68'),
('68264', 'Encino', '68'),
('68266', 'Enciso', '68'),
('68271', 'Florián', '68'),
('68276', 'Floridablanca', '68'),
('68296', 'Galán', '68'),
('68298', 'Gámbita', '68'),
('68306', 'Girón', '68'),
('68318', 'Guaca', '68'),
('68320', 'Guadalupe', '68'),
('68322', 'Guapota', '68'),
('68324', 'Guavatá', '68'),
('68327', 'Guepsa', '68'),
('68344', 'Hato', '68'),
('68368', 'Jesús María', '68'),
('68370', 'Jordán', '68'),
('68377', 'La Belleza', '68'),
('68385', 'Landázuri', '68'),
('68397', 'La Paz', '68'),
('68406', 'Lebrija', '68'),
('68418', 'Los Santos', '68'),
('68425', 'Macaravita', '68'),
('68432', 'Málaga', '68'),
('68444', 'Matanza', '68'),
('68464', 'Mogotes', '68'),
('68468', 'Molagavita', '68'),
('68498', 'Ocamonte', '68'),
('68500', 'Oiba', '68'),
('68502', 'Onzaga', '68'),
('68522', 'Palmar', '68'),
('68524', 'Palmas del Socorro', '68'),
('68533', 'Páramo', '68'),
('68547', 'Pie de Cuesta', '68'),
('68549', 'Pinchote', '68'),
('68572', 'Puente Nacional', '68'),
('68573', 'Puerto Parra', '68'),
('68575', 'Puerto Wilches', '68'),
('68615', 'Rio Negro', '68'),
('68655', 'Sabana de Torres', '68'),
('68669', 'San Andrés', '68'),
('68673', 'San Benito', '68'),
('68679', 'San Gíl', '68'),
('68682', 'San Joaquín', '68'),
('68684', 'San Miguel', '68'),
('68686', 'San José de Miranda', '68'),
('68689', 'San Vicente del Chuc', '68'),
('68705', 'Santa Bárbara', '68'),
('68720', 'Santa Helena del Opó', '68'),
('68745', 'Simacota', '68'),
('68755', 'Socorro', '68'),
('68770', 'Suaita', '68'),
('68773', 'Sucre', '68'),
('68780', 'Suratá', '68'),
('68820', 'Tona', '68'),
('68855', 'Valle de San José', '68'),
('68861', 'Vélez', '68'),
('68867', 'Vetas', '68'),
('68872', 'Villanueva', '68'),
('68895', 'Zapatoca', '68'),
('70001', 'Sincelejo', '70'),
('70110', 'Buenavista', '70'),
('70124', 'Caimito', '70'),
('70204', 'Colosó (Ricaurte)', '70'),
('70215', 'Corozal', '70'),
('70221', 'Coveñas', '70'),
('70230', 'Chalán', '70'),
('70233', 'El Roble', '70'),
('70235', 'Galeras (Nueva Grana', '70'),
('70265', 'Guaranda', '70'),
('70400', 'La Unión', '70'),
('70418', 'Los Palmitos', '70'),
('70429', 'Majagual', '70'),
('70473', 'Morroa', '70'),
('70508', 'Ovejas', '70'),
('70523', 'Palmito', '70'),
('70670', 'Sampués', '70'),
('70678', 'San Benito Abad', '70'),
('70702', 'San Juan de Betulia', '70'),
('70708', 'San Marcos', '70'),
('70713', 'San Onofre', '70'),
('70717', 'San Pedro', '70'),
('70742', 'Sincé', '70'),
('70771', 'Sucre', '70'),
('70820', 'Tolú', '70'),
('70823', 'Tolú Viejo', '70'),
('73001', 'Ibagué', '73'),
('73024', 'Alpujarra', '73'),
('73026', 'Alvarado', '73'),
('73030', 'Ambalema', '73'),
('73043', 'Anzoátegui', '73'),
('73055', 'Armero (Guayabal)', '73'),
('73067', 'Ataco', '73'),
('73124', 'Cajamarca', '73'),
('73148', 'Carmen de Apicalá', '73'),
('73152', 'Casabianca', '73'),
('73168', 'Chaparral', '73'),
('73200', 'Coello', '73'),
('73217', 'Coyaima', '73'),
('73226', 'Cunday', '73'),
('73236', 'Dolores', '73'),
('73268', 'Espinal', '73'),
('73270', 'Falan', '73'),
('73275', 'Flandes', '73'),
('73283', 'Fresno', '73'),
('73319', 'Guamo', '73'),
('73347', 'Herveo', '73'),
('73349', 'Honda', '73'),
('73352', 'Icononzo', '73'),
('73408', 'Lérida', '73'),
('73411', 'Líbano', '73'),
('73443', 'Mariquita', '73'),
('73449', 'Melgar', '73'),
('73461', 'Murillo', '73'),
('73483', 'Natagaima', '73'),
('73504', 'Ortega', '73'),
('73520', 'Palocabildo', '73'),
('73547', 'Piedras', '73'),
('73555', 'Planadas', '73'),
('73563', 'Prado', '73'),
('73585', 'Purificación', '73'),
('73616', 'Rioblanco', '73'),
('73622', 'Roncesvalles', '73'),
('73624', 'Rovira', '73'),
('73671', 'Saldaña', '73'),
('73675', 'San Antonio', '73'),
('73678', 'San Luis', '73'),
('73686', 'Santa Isabel', '73'),
('73770', 'Suárez', '73'),
('73854', 'Valle de San Juan', '73'),
('73861', 'Venadillo', '73'),
('73870', 'Villahermosa', '73'),
('73873', 'Villarrica', '73'),
('76001', 'Calí', '76'),
('76020', 'Alcalá', '76'),
('76036', 'Andalucía', '76'),
('76041', 'Ansermanuevo', '76'),
('76054', 'Argelia', '76'),
('76100', 'Bolívar', '76'),
('76109', 'Buenaventura', '76'),
('76111', 'Buga', '76'),
('76113', 'Bugalagrande', '76'),
('76122', 'Caicedonia', '76'),
('76126', 'Calima (Darién)', '76'),
('76130', 'Candelaria', '76'),
('76147', 'Cartago', '76'),
('76233', 'Dagua', '76'),
('76243', 'El Águila', '76'),
('76246', 'El Cairo', '76'),
('76248', 'El Cerrito', '76'),
('76250', 'El Dovio', '76'),
('76275', 'Florida', '76'),
('76306', 'Ginebra', '76'),
('76318', 'Guacarí', '76'),
('76364', 'Jamundí', '76'),
('76400', 'La Unión', '76'),
('76403', 'La Victoria', '76'),
('76497', 'Obando', '76'),
('76520', 'Palmira', '76'),
('76563', 'Pradera', '76'),
('76606', 'Restrepo', '76'),
('76616', 'Riofrío', '76'),
('76622', 'Roldanillo', '76'),
('76670', 'San Pedro', '76'),
('76677', 'La Cumbre', '76'),
('76736', 'Sevilla', '76'),
('76823', 'Toro', '76'),
('76828', 'Trujillo', '76'),
('76834', 'Tulúa', '76'),
('76845', 'Ulloa', '76'),
('76863', 'Versalles', '76'),
('76869', 'Vijes', '76'),
('76890', 'Yotoco', '76'),
('76892', 'Yumbo', '76'),
('76895', 'Zarzal', '76'),
('81001', 'Arauca', '81'),
('81065', 'Arauquita', '81'),
('81220', 'Cravo Norte', '81'),
('81300', 'Fortúl', '81'),
('81591', 'Puerto Rondón', '81'),
('81736', 'Saravena', '81'),
('81794', 'Tame', '81'),
('85001', 'Yopal', '85'),
('85010', 'Aguazul', '85'),
('85015', 'Chámeza', '85'),
('85125', 'Hato Corozal', '85'),
('85136', 'La Salina', '85'),
('85139', 'Maní', '85'),
('85162', 'Monterrey', '85'),
('85225', 'Nunchía', '85'),
('85230', 'Orocué', '85'),
('85250', 'Paz de Ariporo', '85'),
('85263', 'Pore', '85'),
('85279', 'Recetor', '85'),
('85300', 'Sabanalarga', '85'),
('85315', 'Sácama', '85'),
('85325', 'San Luís de Palenque', '85'),
('85400', 'Támara', '85'),
('85410', 'Tauramena', '85'),
('85430', 'Trinidad', '85'),
('85440', 'Villanueva', '85'),
('86001', 'Mocoa', '86'),
('86219', 'Colón', '86'),
('86320', 'Orito', '86'),
('86568', 'Puerto Asís', '86'),
('86569', 'Puerto Caicedo', '86'),
('86571', 'Puerto Guzmán', '86'),
('86573', 'Puerto Leguízamo', '86'),
('86749', 'Sibundoy', '86'),
('86755', 'San Francisco', '86'),
('86757', 'San Miguel', '86'),
('86760', 'Santiago', '86'),
('86865', 'Valle del Guamuez', '86'),
('86885', 'Villagarzón', '86'),
('88564', 'Providencia', '88'),
('91001', 'Leticia', '91'),
('91540', 'Puerto Nariño', '91'),
('94001', 'Inírida', '94'),
('95001', 'San José del Guaviar', '95'),
('95015', 'Calamar', '95'),
('95025', 'El Retorno', '95'),
('95200', 'Miraflores', '95'),
('97001', 'Mitú', '97'),
('97161', 'Carurú', '97'),
('97666', 'Taraira', '97'),
('99001', 'Puerto Carreño', '99'),
('99524', 'La Primavera', '99'),
('99624', 'Santa Rosalía', '99'),
('99773', 'Cumaribo', '99');

-- Roles

INSERT INTO `roles`(`rol`) VALUES ('administrador'),('empleado');

-- Tipo Vehiculos

INSERT INTO `tiposvehiculos`(`tipovehiculo`) VALUES ('moto'),('automóvil'),('camioneta'),('camión');

-- Especialidad

INSERT INTO `especialidades`(`especialidad`, `tiposvehiculo`) VALUES ('moto', 1),('automóvil', 2),('camioneta', 3),('camión', 4);

-- DATOS PRIMER ADMIN
INSERT INTO `usuarios`(
`cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `idmunicipio`, `fechanac`, `usuario`, `clave`
) VALUES (
'123456789', 'Admin', 'Admin', 'Pasto', '1234567890',
'admin@udenar.edu.co', '52001', '2002-09-21', 'admin', 'admin'
);

INSERT INTO `detallesrol`(`cedula`, `rol`) VALUES ('123456789', 1);

-- DATOS PRIMER EMPLEADO

INSERT INTO `usuarios`(
`cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `idmunicipio`, `fechanac`, `usuario`, `clave`
) VALUES (
'987654321', 'Cristian Yamith', 'Salazar', 'Pasto', '987654321',
'cristian@udenar.edu.co', '52001', '2000-01-01', 'cristian', '1234'
);

INSERT INTO `empleados`(`cedula`, `fechaingreso`, `sueldo`, `especialidad`) VALUES ('987654321','2000-01-01', 1000000, 1);

INSERT INTO `detallesrol`(`cedula`, `rol`) VALUES ('987654321', 2);

-- Tipos trabajos

INSERT INTO `tipostrabajos` (`id`, `tipotrabajo`, `estado`) VALUES
(1, 'Mantenimiento', 1),
(2, 'Reparación', 1);

-- Clientes

insert into `clientes` (`cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `idmunicipio`, `fechanac`) values ('33093429852', 'Storm', 'Pallasch', '7327', '3351921526', 'spallasch0@github.io', '95200', '1977-04-13');
insert into `clientes` (`cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `idmunicipio`, `fechanac`) values ('62209251115', 'Sisile', 'Popham', '89', '9963388673', 'spopham1@deviantart.com', '99624', '2002-05-21');
insert into `clientes` (`cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `idmunicipio`, `fechanac`) values ('89065643028', 'Rafael', 'Neasam', '5619', '2231690904', 'rneasam2@skype.com', '94001', '2001-07-12');
insert into `clientes` (`cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `idmunicipio`, `fechanac`) values ('95041678030', 'Lynnea', 'Kohring', '0422', '3793226306', 'lkohring3@tripadvisor.com', '86571', '1931-12-31');
insert into `clientes` (`cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `idmunicipio`, `fechanac`) values ('98793235736', 'Ricca', 'Ropking', '9947', '4386547455', 'rropking4@google.com.br', '97161', '1956-08-09');

-- Categoria producto

INSERT INTO `cat_producto` (`id`, `categoria`, `estado`) VALUES
(1, 'Repuesto', 1),
(2, 'Accesorio', 1);

-- Formas de pago

INSERT INTO `formaspago`(`id`, `formapago`) VALUES (1, 'Contado'),(2, 'Credito');

-- Productos basicos

INSERT INTO `productos` (`codigo`, `nombre`, `categoria`, `fechaingreso`, `preciocompra`, `precioventa`, `stock`) VALUES
('19560', 'Veribet', 2, '2017-01-24', 3149107, 3186921, 58),
('25221', 'Sonsing', 2, '2022-08-20', 3332654, 1223843, 280),
('30181', 'Bigtax', 2, '2021-02-25', 3288496, 1821717, 123),
('32093', 'Zoolab', 1, '2019-04-02', 2310356, 1179213, 329),
('35842', 'Tampflex', 1, '2016-08-28', 410576, 1653802, 382),
('44574', 'Keylex', 1, '2019-06-29', 289526, 2298395, 379),
('55621', 'Flowdesk', 1, '2021-05-27', 1812186, 3327162, 164),
('57869', 'Stringtough', 2, '2021-08-18', 3108023, 3593388, 5),
('66877', 'Tin', 2, '2016-11-11', 1950272, 1894627, 275),
('77630', 'Zontrax', 2, '2016-01-05', 1365813, 450780, 374),
('83924', 'Tampflex', 2, '2017-06-28', 2081463, 1939033, 329),
('86230', 'Vagram', 2, '2017-10-22', 2403947, 3825602, 275),
('88466', 'Treeflex', 1, '2015-12-20', 270604, 1609046, 304),
('89678', 'Subin', 1, '2016-08-20', 1406454, 460296, 294),
('92966', 'Vagram', 1, '2022-01-13', 2807287, 3082199, 179),
('97326', 'Duobam', 2, '2016-08-07', 1152457, 372883, 315),
('98321', 'Zamit', 2, '2021-12-01', 3130642, 79907, 155);

-- Vehiculos de prueba

INSERT INTO `vehiculos`(`placa`, `modelo`, `color`, `marca`, `observacion`, `propietario`, `tipovehiculo`) VALUES ('ADA-123', '2022', 'rojo', 'renault', 'esta dañado', '33093429852', '2');
INSERT INTO `vehiculos`(`placa`, `modelo`, `color`, `marca`, `observacion`, `propietario`, `tipovehiculo`) VALUES ('AFW-542', '1998', 'gris', 'chevrolet', 'esta buenisimo', '98793235736', '2');
INSERT INTO `vehiculos`(`placa`, `modelo`, `color`, `marca`, `observacion`, `propietario`, `tipovehiculo`) VALUES ('GTH-478', '2002', 'verde', 'toyota', 'esta bueno', '89065643028', '3');

-- insertar datos en la planilla de ingreso

INSERT INTO `planillaingresos`(`cliente`, `fechaingreso`, `placavehiculo`, `descripciontrabajo`, `observacion`, `empleado`, `tipotrabajo`) VALUES ('33093429852', '2021-12-01', 'ADA-123', 'se le va hacer un mantenimiento', 'el carro le esta fallando la luz del freno', '987654321', '1');