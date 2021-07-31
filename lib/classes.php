<?php
    class testeblue {
        protected $db;

        public function  __construct($db) {
            $this->db = $db;
        }

        public function listaCategorias() {
            $sql = $this->db->prepare("SELECT * FROM categorias ORDER BY nome_categoria ASC");
            $sql->execute();
            $get = $sql->get_result();
            $total = $get->num_rows;

            if($total > 0) {
                while($dados = $get->fetch_array()){
                    echo "<li><a href='?categoria={$dados['id_categoria']}'>{$dados['nome_categoria']}</a></li>";
                }
            }
        }

        public function listaProdutos() {
            if(isset($_GET['categoria'])) {
                $sql = $this->db->prepare("SELECT * FROM produtos WHERE categoria = ?");
                $sql->bind_param("s", $_GET['categoria']);
            } elseif (isset($_GET['nome'])) {
                $sql = $this->db->prepare("SELECT * FROM produtos WHERE nome = ?");
                $sql->bind_param("s", $_GET['nome']);
            } else {
                $sql = $this->db->prepare("SELECT * FROM produtos");
            }

            $sql->execute();
            $get = $sql->get_result();
            $total = $get->num_rows;

            if($total > 0) {
                while($dados = $get->fetch_array()) {
                    echo " <div class='col-sm-3'>
                    <a href='produto.php/?id={$dados['id']}'><img src='{$dados['imagem']}'>
                    <div class='content-produto'>
                    <span class='nome-produto'>{$dados['nome']}</span><br>
                    <span class='preco-produto'>R$ {$dados['valor']}</span><br>
                    <a class='btn btn-primary' href='cart.php/?id={$dados['id']}' role='button'>Add cart</a>
                    </div>
                </div>";
                }
            }
        }

        public function listaProdutoIndivial() {
            $sql = $this->db->prepare("SELECT * FROM produtos WHERE id = ?");
            $sql->bind_param("s", $_GET['id']);

            $sql->execute();
            $get = $sql->get_result();
            $total = $get->num_rows;

            if($total > 0) {
                while($dados = $get->fetch_array()) {
                    echo " <div class='col-sm-3'>
                    <a><img src='{$dados['imagem']}'>
                    <div class='content-produto'>
                    <span class='nome-produto'>{$dados['nome']}</span><br>
                    <span class='preco-produto'>R$ {$dados['valor']}</span>
                    </div>
                </div>";
                }
            }
        }

        public function addCart() {
            $sql = $this->db->prepare("SELECT * FROM produtos WHERE id = ?");
            $sql->bind_param("s", $_GET['id']);

            $sql->execute();
            $get = $sql->get_result();
            $total = $get->num_rows;

                        if($total > 0) {
                while($dados = $get->fetch_array()) {
                    echo " <div class='col-sm-3'>
                    <a><img src='{$dados['imagem']}'>
                    <div class='content-produto'>
                    <span class='nome-produto'>{$dados['nome']}</span><br>
                    <span class='preco-produto'>R$ {$dados['valor']}</span>
                    </div>
                </div>";
                }
            }
        }

        public function listarPedidos() {
            $sql = $this->db->prepare("SELECT * FROM pedidos");
            $sql->execute();
            $get = $sql->get_result();
            $total = $get->num_rows;

            if($total > 0) {
                while($dados = $get->fetch_array()){
                    echo "<li class='list-group-item list-group-item-success' >Pedido {$dados['id']}</li>";
                    echo "<li class='list-group-item' >Produto: {$dados['produtos']}</li>";
                    echo "<li class='list-group-item' >Valor: {$dados['valor']}</li>";
                    echo "<li class='list-group-item' >Frete: {$dados['frete']}</li>";
                    echo "<li class='list-group-item' >Forma de pagamento: {$dados['forma_pagamento']}</li>";
                    echo "<li class='list-group-item' >Endereço de entrega{$dados['endereco_entrega']}</li><br><br>";
                }
            }
        }
    }
?>