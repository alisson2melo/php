CREATE TABLE funcionários ( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(100) NOT NULL, 
    cargo VARCHAR(30) NOT NULL, 
    salário int(10) NOT NULL 
); 
 
INSERT INTO funcionários (nome, cargo, salário) VALUES 
                            ('Clei', 'Dev. Sênior', '4.000'),
                            ('Jéssica', 'Dev. Pleno', '3.500');

 
