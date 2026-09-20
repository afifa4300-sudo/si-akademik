require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

if ($url === 'dosen') {
 AuthMiddleware::handle();
 $controller = new DosenController();
 $controller->index();
 exit;
}
