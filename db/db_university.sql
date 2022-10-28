-- Base de usuarios para los administradores y profesores
create table users (
	idUser INT,
	firstName VARCHAR(50),
	lastName VARCHAR(50),
	email VARCHAR(50),
	phone VARCHAR(50),
	gender VARCHAR(50),
	dateBirth DATE
);
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (1, 'admin', '', 'admin@nasau.com', '877-240-4615', 'Male', '1/10/1988');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (2, 'manager', '', 'manager@nasau.com', '248-400-4545', 'Male', '6/25/1989');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (3, 'Hans', 'Rottery', 'hrottery2@un.org', '902-914-1348', 'Male', '7/28/1985');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (4, 'Kirstin', 'Samuel', 'ksamuel3@taobao.com', '895-134-0424', 'Female', '10/22/1990');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (5, 'Brandon', 'Umfrey', 'bumfrey4@microsoft.com', '414-566-9329', 'Male', '5/20/1983');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (6, 'Adel', 'Honnan', 'ahonnan5@constantcontact.com', '282-989-1352', 'Female', '3/29/1986');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (7, 'Kaitlyn', 'Kinnett', 'kkinnett6@oaic.gov.au', '923-477-0360', 'Female', '9/5/1987');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (8, 'Ashla', 'Beeton', 'abeeton7@blinklist.com', '388-277-8377', 'Female', '5/9/1984');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (9, 'Nari', 'Belhomme', 'nbelhomme8@sourceforge.net', '288-135-7225', 'Female', '6/17/1982');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (10, 'Helli', 'Jahndel', 'hjahndel9@usa.gov', '629-904-4206', 'Female', '2/26/1985');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (11, 'Ambrose', 'Bengough', 'abengougha@disqus.com', '342-703-6897', 'Male', '7/7/1985');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (12, 'Bryn', 'Leppo', 'bleppob@wp.com', '201-338-4541', 'Male', '1/7/1990');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (13, 'Jessa', 'Cranidge', 'jcranidgec@deviantart.com', '967-300-5163', 'Female', '8/15/1984');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (14, 'Niels', 'de Amaya', 'ndeamayad@hibu.com', '419-659-1767', 'Male', '4/3/1983');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (15, 'Glenden', 'Woltering', 'gwolteringe@thetimes.co.uk', '581-776-2189', 'Male', '1/1/1990');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (16, 'Leanora', 'Legge', 'lleggef@sakura.ne.jp', '521-269-9829', 'Female', '4/22/1987');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (17, 'Tucker', 'Baldry', 'tbaldryg@webmd.com', '407-491-9482', 'Male', '4/27/1989');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (18, 'Austen', 'Maypother', 'amaypotherh@redcross.org', '910-667-7951', 'Male', '4/9/1989');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (19, 'Sigismondo', 'Florentine', 'sflorentinei@ifeng.com', '263-455-4655', 'Male', '2/18/1982');
insert into users (idUser, firstName, lastName, email, phone, gender, dateBirth) values (20, 'Garfield', 'Godar', 'ggodarj@eepurl.com', '233-767-9629', 'Male', '6/28/1988');

-- Tabla para los administradores

create table administrators (
	idAdmin INT,
	idUser INT,
	password VARCHAR(50)
);
insert into administrators (idAdmin, idUser, password) values (1, 1, 'admin12');
insert into administrators (idAdmin, idUser, password) values (2, 2, 'manager12');

-- Tabla para los profesores
create table teachers (
	idTeacher INT,
	idUser INT,
	password VARCHAR(50),
	idSection INT
);
insert into teachers (idTeacher, idUser, password, idSection) values (1, 3, '9sBAiSVtjVUQ', 1);
insert into teachers (idTeacher, idUser, password, idSection) values (2, 4, 'lWInqI', 2);
insert into teachers (idTeacher, idUser, password, idSection) values (3, 5, 'EtLUWBJ', 3);
insert into teachers (idTeacher, idUser, password, idSection) values (4, 6, 'gRSa4DNZO8t7', 4);
insert into teachers (idTeacher, idUser, password, idSection) values (5, 7, 'ut9wfpJfoRK', 5);
insert into teachers (idTeacher, idUser, password, idSection) values (6, 8, 'nLm63wvfL5', 6);
insert into teachers (idTeacher, idUser, password, idSection) values (7, 9, 'FbSHASd', 7);
insert into teachers (idTeacher, idUser, password, idSection) values (8, 10, 'BiGe1MYQWXQV', 8);
insert into teachers (idTeacher, idUser, password, idSection) values (9, 11, 'UswG3t4o6vL', 9);
insert into teachers (idTeacher, idUser, password, idSection) values (10, 12, 'Z7FbiVdZ7', 10);
insert into teachers (idTeacher, idUser, password, idSection) values (11, 13, '6qLFWt4mp3', 11);
insert into teachers (idTeacher, idUser, password, idSection) values (12, 14, '58bXE8T', 12);
insert into teachers (idTeacher, idUser, password, idSection) values (13, 15, 'x57Xch', 13);
insert into teachers (idTeacher, idUser, password, idSection) values (14, 16, 'dQgfBZM', 14);
insert into teachers (idTeacher, idUser, password, idSection) values (15, 17, 'qt2SQyMrEF', 15);


