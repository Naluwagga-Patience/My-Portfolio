CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(150),
    project_description TEXT,
    project_image VARCHAR(255),
    project_link VARCHAR(255)
);

INSERT INTO `projects` (`id`, `project_name`, `project_description`, `project_image`, `project_link`) VALUES (1, 'Student Companion App', 'This is a mobile app I developed that helps users track their daily tasks and manage time efficiently.', 'app_project.jpeg', 'https://github.com/Naluwagga-Patience/StudentCompanionapp.git');

CREATE TABLE about_me (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    focus1 VARCHAR(50),
    focus2 VARCHAR(50),
    bio TEXT,
    education TEXT,
    certifications TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
insert into about_me(name,title,focus1,focus2,bio,education,certifications) 
values('Naluwagga Patience Mary','Web & App Developer','responsive','user-friendly','When I'm not coding, I love learning new technologies and improving my skills to build innovative
                solutions.','Bachelor’s Degree in Information Technology and Computing ','Digital Marketing, Responsive Web Design, Introduction to Data
                     Science, Networking Basics, HTML & CSS');

    CREATE TABLE contact(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    linkedin VARCHAR(255),
    github VARCHAR(255)
);

INSERT INTO contact(email,phone,linkedin,github) 
      values('naluwaggapatience@gmail.com','+256 704 233 085','https://www.linkedin.com/in/naluwagga-patience-mary-123456789/','https://github.com/naluwaggapatience');

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT
);

INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message');

create table blog(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);