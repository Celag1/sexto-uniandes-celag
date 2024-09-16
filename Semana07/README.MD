# Generación de Reporte de Factura (usando FPDF) - Cel@g - Celso Aguirre - UNIANDES

El reporte se puede ejecutar desde el navegador accediendo a la siguiente URL:  
`http://localhost/sexto/Proyectos/03MVC/reports/factura.report.php?idFactura=1`  
Donde `idFactura` es el identificador de la factura que se desea imprimir.

## Requisitos

- PHP 7.x o superior.
- Librería FPDF instalada en el proyecto.
- MySQL o MariaDB para la base de datos.
- Servidor web como Apache o Nginx.

## Instalación

1. Clonar el repositorio.
2. Configurar la base de datos en el archivo `config.php`.
3. Ejecutar el script `datos_de_prueba.sql` para insertar datos de prueba en la base de datos.
4. Asegurarse de que la librería FPDF esté instalada en la carpeta `fpdf/`.

## Archivos Importantes

- `03MVC/models/factura.model.php`: Contiene la lógica de negocio para gestionar facturas.
- `03MVC/reports/factura.report.php`: Archivo encargado de generar el reporte PDF.
- `fpdf/fpdf.php`: Librería utilizada para generar el PDF.