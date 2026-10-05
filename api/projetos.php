<?php
// api/projetos.php - projetos PUBLICADOS do Portifolio em JSON
header('Content-Type: application/json; charset=utf-8');
header('Acess-Control-Allow-Origin: *');

require __DIR__ . '/../conexao.php';

$sql = "SELECT id, nome, descricao, tecnologias, link_github, ano FROM projetos WHERE status = 'publicado' ORDER BY ano DESC, id";
$projetos = $pdo->query($sql)->fetchALL();

echo json_encode($projetos);