
-- Truncar tablas
TRUNCATE TABLE sexto.clientes;
TRUNCATE TABLE sexto.productos;
TRUNCATE TABLE sexto.factura;
TRUNCATE TABLE sexto.factura_detalle;
TRUNCATE TABLE sexto.kardex;


-- Eliminar la relación entre detalle_factura y kardex
ALTER TABLE sexto.detalle_factura DROP FOREIGN KEY fk_Detalle_Factura_Kardex1;
ALTER TABLE sexto.detalle_factura DROP COLUMN Kardex_idKardex;

-- Crear la relación entre detalle_factura y producto
ALTER TABLE sexto.detalle_factura ADD COLUMN productos_idProductos INT NOT NULL;
ALTER TABLE sexto.detalle_factura ADD CONSTRAINT fk_detalle_factura_productos1 FOREIGN KEY (productos_idProductos) REFERENCES productos (idProductos);

-- Insertar datos de prueba

-- Insertar Clientes
INSERT INTO sexto.clientes (Nombres, Direccion, Telefono, Cedula, Correo) VALUES
('Celso Aguirre', 'Av. Bolivariana', '0998769259', '1801538719', 'celag3@gmail.com'),
('Consuelo Paz', 'Ambato', '0992657135', '0546848725', 'consue.paz@hotmail.com'),
('Eugenia Vásconez', 'Av. Cevallos', '0985647258', '0576258468', 'eugenia1@hotmail.com');

-- Insertar Productos
INSERT INTO sexto.productos (Codigo_Barras, Nombre_Producto, Graba_IVA) VALUES
('1234567890123', 'Producto 1', 1),
('2345678901234', 'Producto 2', 0),
('3456789012345', 'Producto 3', 1),
('8707897979799', 'Producto 4', 1);

-- Insertar Facturas
INSERT INTO sexto.factura (Fecha, Sub_total, Sub_total_iva, Valor_IVA, Clientes_idClientes) VALUES
('2024-09-14 10:00:00', 850, 250, 30, 1),
('2024-09-14 11:00:00', 2500, 500, 60, 2);

-- Insertar Detalles de Facturas
INSERT INTO sexto.detalle_factura (Cantidad, Factura_idFactura, Precio_Unitario, Sub_Total_item, productos_idProductos) VALUES
(2, 1, 100, 200, 1),
(3, 1, 200, 600, 2),
(1, 1, 50, 50, 3),
(5, 2, 100, 500, 1),
(10, 2, 200, 2000, 2);
