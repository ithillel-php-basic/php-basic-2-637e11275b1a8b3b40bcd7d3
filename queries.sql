-- Inserts data to table 'users'
INSERT INTO users (name, email, password) VALUES ('Verge', 'vmulbery0@behance.net', md5('ptxGR0lF4eM'));
INSERT INTO users (name, email, password) VALUES ('Sigrid', 'smilsted1@skype.com', md5('C1iQD1wuL'));
INSERT INTO users (name, email, password) VALUES ('Emmery', 'esamson2@mapquest.com', md5('h1gl7cawvYh'));
INSERT INTO users (name, email, password) VALUES ('Martino', 'mglanville3@ezinearticles.com', md5('xY2e62u'));
INSERT INTO users (name, email, password) VALUES ('Kelsey', 'kannett4@yolasite.com', md5('gBICcUVO1O92'));
INSERT INTO users (name, email, password) VALUES ('Roseanna', 'rhavenhand5@ehow.com', md5('irOfHyR'));
INSERT INTO users (name, email, password) VALUES ('Sylvia', 'sblessed6@surveymonkey.com', md5('Yt5DeBngrjn'));
INSERT INTO users (name, email, password) VALUES ('Orly', 'oglasscoe7@cnn.com', md5('d07m2VE4G'));
INSERT INTO users (name, email, password) VALUES ('Alameda', 'aickovits8@theglobeandmail.com', md5('YyU1Hh'));
INSERT INTO users (name, email, password) VALUES ('Donelle', 'ddallaghan9@technorati.com', md5('KVXSvKa'));

-- Inserts data to table 'projects'
INSERT INTO projects (name, user_id) VALUES ('Inbox', 7);
INSERT INTO projects (name, user_id) VALUES ('Learning', 4);
INSERT INTO projects (name, user_id) VALUES ('Work', 10);
INSERT INTO projects (name, user_id) VALUES ('Home task', 7);
INSERT INTO projects (name, user_id) VALUES ('Auto', 2);

-- Inserts data to table 'tasks'
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.', 'Duis at velit eu est congue elementum. In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.', 'backlog', 'Dui.jpeg', 4, 3, '2023-05-16');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Maecenas ut massa quis augue luctus tincidunt.', 'Donec dapibus. Duis at velit eu est congue elementum.', 'done', 'Ligula.avi', 1, 5, '2023-05-04');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 'Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo.', 'backlog', 'RidiculusMusEtiam.ppt', 10, 5, '2023-05-04');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Integer ac leo.', 'Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat.', 'done', 'QuisqueArcuLibero.avi', 9, 3, '2023-04-25');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Pellentesque ultrices mattis odio.', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'in-progress', 'NullaNunc.ppt', 3, 5, '2023-05-06');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Ut tellus.', 'In eleifend quam a odio.', 'done', 'CubiliaCurae.xls', 1, 2, '2023-05-08');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Integer tincidunt ante vel ipsum.', 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'backlog', 'LigulaNec.ppt', 2, 1, '2023-05-11');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 'backlog', 'Donec.pdf', 10, 3, '2023-04-24');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Aliquam erat volutpat.', 'Proin at turpis a pede posuere nonummy. Integer non velit.', 'done', 'EuMi.pdf', 1, 3, '2023-05-07');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Morbi a ipsum.', 'Proin at turpis a pede posuere nonummy. Integer non velit.', 'to-do', 'JustoSollicitudin.doc', 3, 1, '2023-04-29');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Pellentesque ultrices mattis odio.', 'Nulla justo.', 'backlog', 'SapienPlacerat.png', 2, 3, '2023-05-04');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('In eleifend quam a odio.', 'Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', 'to-do', 'EuTincidunt.jpeg', 7, 2, '2023-05-11');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Suspendisse potenti.', 'Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'backlog', 'PosuereMetus.ppt', 10, 3, '2023-05-06');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Duis mattis egestas metus.', 'Phasellus in felis.', 'in-progress', 'PedeLibero.jpeg', 4, 5, '2023-05-06');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Duis ac nibh.', 'Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis.', 'done', 'Sit.mp3', 1, 3, '2023-05-06');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Maecenas tincidunt lacus at velit.', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', 'in-progress', 'VelitEu.avi', 1, 1, '2023-04-29');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Vivamus vestibulum sagittis sapien.', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque.', 'in-progress', 'DolorVel.avi', 9, 4, '2023-05-08');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Duis ac nibh.', 'Aliquam erat volutpat. In congue. Etiam justo.', 'done', 'Viverra.mp3', 9, 4, '2023-05-08');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 'Curabitur in libero ut massa volutpat convallis.', 'done', 'FaucibusOrci.avi', 4, 5, '2023-05-03');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', 'Duis at velit eu est congue elementum. In hac habitasse platea dictumst.', 'backlog', 'VitaeMattisNibh.xls', 7, 4, '2023-04-29');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Vivamus vestibulum sagittis sapien.', 'Mauris sit amet eros.', 'backlog', 'PosuereCubiliaCurae.doc', 2, 3, '2023-05-09');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Donec vitae nisi.', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus.', 'in-progress', 'EleifendDonec.avi', 1, 1, '2023-05-11');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Morbi quis tortor id nulla ultrices aliquet.', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'backlog', 'VestibulumVelitId.jpeg', 5, 3, '2023-04-24');
INSERT INTO tasks (title, description, status, file_path, user_id, project_id, created_at) VALUES ('Duis aliquam convallis nunc.', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'done', 'NonMattisPulvinar.ppt', 2, 4, '2023-05-08');


-- Selects all row from table 'users'
SELECT * FROM users;

-- Selects all row from table 'projects'
SELECT * FROM projects;

-- Selects all row from table 'tasks'
SELECT * FROM tasks;

-- Selects all row from table 'projects' for the user with email equal 'sblessed6@surveymonkey.com'
SELECT * FROM projects WHERE user_id = (SELECT id FROM users WHERE email='sblessed6@surveymonkey.com');

-- Selects all row from table 'tasks' related to the project with 'id' equal 3
SELECT * FROM tasks WHERE project_id = 3;

-- Updates status for the task with 'id' equal 11
UPDATE tasks SET status = 'in-progress' WHERE id = 11;

-- Updates status for the task with 'id' equal 11
UPDATE tasks SET status = 'done' WHERE id = 11;

-- Updates title for the task with 'id' equal 11
UPDATE tasks SET title = "New task's name" WHERE id = 11;