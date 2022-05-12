CREATE table produto(
	idProduto int PRIMARY KEY AUTO_INCREMENT,
    nomeProduto varchar(100) not null,
    preçoProduto float not null,
    fk_idCategoria int not null,
    FOREIGN key (fk_idCategoria) REFERENCES categoria(idCategoria)
);