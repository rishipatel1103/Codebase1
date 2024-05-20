CREATE TABLE models (
    id INTEGER PRIMARY KEY,
    name TEXT NOT NULL,
    description TEXT NOT NULL,
    model_url TEXT NOT NULL
);

INSERT INTO models (name, description, model_url) VALUES
('Can', 'This is a 3D model of a can using 3DS max and converted to VRML to X3D and used software like Meshlab.' , 'Models/CanModel.x3d');

