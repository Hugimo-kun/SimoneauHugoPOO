CREATE DATABASE IF NOT EXISTS moto;

USE moto;

CREATE TABLE IF NOT EXISTS moto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(30) NOT NULL,
    model VARCHAR(30) NOT NULL,
    type VARCHAR(30) NOT NULL,
    price FLOAT NOT NULL,
    image TEXT NOT NULL
) ENGINE = InnoDB;

INSERT INTO
    moto (
        brand,
        model,
        type,
        price,
        image
    )
VALUES (
        'Yamaha',
        'XT660R',
        'Enduro',
        8000.0,
        'https://mcn-images.bauersecure.com/wp-images/3549/1440x960/yamaha-xt660r-02.jpg?mode=max&quality=90&scale=down'
    );

INSERT INTO
    moto (
        brand,
        model,
        type,
        price,
        image
    )
VALUES (
        'Harley-Davidson',
        'Iron 883',
        'Custom',
        9000.0,
        'https://d2bywgumb0o70j.cloudfront.net/2019/08/22/0e1191a48bd9296f173ac1c36bb815da_77dae876625a15f4.jpg'
    );

INSERT INTO
    moto (
        brand,
        model,
        type,
        price,
        image
    )
VALUES (
        'Ducati',
        'Panigale V2',
        'Sportive',
        16000.0,
        'https://www.esprit-ducat.com/media/catalog/product/m/y/my23-panigale-v2-bk-model-blocks-630x390.png'
    );

INSERT INTO
    moto (
        brand,
        model,
        type,
        price,
        image
    )
VALUES (
        'BMW',
        'R 1250 R',
        'Roadster',
        14000.0,
        'https://www.wunderlich.de/media/50/f6/0d/1671781369/R1250R_Nachher_1800x1200.jpg'
    );