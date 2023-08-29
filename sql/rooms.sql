-- Create a table for hotel rooms
CREATE TABLE rooms (
    room_id INT PRIMARY KEY AUTO_INCREMENT,
    room_number VARCHAR(10) NOT NULL,
    room_type VARCHAR(20) NOT NULL,
    bed_count INT NOT NULL,
    bathroom_type VARCHAR(20) NOT NULL,
    view_type VARCHAR(20) NOT NULL,
    floor_level INT NOT NULL,
    has_balcony BOOLEAN NOT NULL
);

-- Insert data into the rooms table
INSERT INTO rooms (room_number, room_type, bed_count, bathroom_type, view_type, floor_level, has_balcony)
VALUES
    ('101', 'Standard', 1, 'Private', 'City View', 1, FALSE),
    ('102', 'Standard', 2, 'Private', 'City View', 1, FALSE),
    ('103', 'Deluxe', 1, 'Private', 'Ocean View', 1, TRUE),
    ('104', 'Deluxe', 2, 'Private', 'Ocean View', 1, TRUE),
    ('105', 'Suite', 2, 'Ensuite', 'Mountain View', 2, TRUE),
    ('106', 'Suite', 3, 'Ensuite', 'Mountain View', 2, TRUE),
    ('201', 'Standard', 1, 'Private', 'City View', 2, FALSE),
    ('202', 'Standard', 2, 'Private', 'City View', 2, FALSE),
    ('203', 'Deluxe', 1, 'Private', 'Ocean View', 2, TRUE),
    ('204', 'Deluxe', 2, 'Private', 'Ocean View', 2, TRUE),
    ('205', 'Suite', 2, 'Ensuite', 'Mountain View', 3, TRUE),
    ('206', 'Suite', 3, 'Ensuite', 'Mountain View', 3, TRUE),
    ('301', 'Standard', 1, 'Private', 'City View', 3, FALSE),
    ('302', 'Standard', 2, 'Private', 'City View', 3, FALSE),
    ('303', 'Deluxe', 1, 'Private', 'Ocean View', 3, TRUE),
    ('304', 'Deluxe', 2, 'Private', 'Ocean View', 3, TRUE),
    ('305', 'Suite', 2, 'Ensuite', 'Mountain View', 4, TRUE),
    ('306', 'Suite', 3, 'Ensuite', 'Mountain View', 4, TRUE);

-- Additional rooms can be added as needed
