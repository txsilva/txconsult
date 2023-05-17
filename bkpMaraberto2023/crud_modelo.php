<?php /* Template Name: crud_modelo
		 Autor: NEAD/EF
		 */ 
		 
		get_header();

global $wpdb;

		
		if(!empty($_POST['botao'])){
			if(!empty($_POST['user_login']) AND !empty($_POST['user_pass']) AND !empty($_POST['user_nicename']) AND !empty($_POST['user_email'])){
				print_r($_POST);

				$tabela_nome = $wpdb->prefix.'users';
				$tabela_nome1 = $wpdb->prefix.'usermeta'; 
				$user_login = sanitize_text_field($_POST['user_login']);
				$user_pass = sanitize_text_field($_POST['user_pass']);
				$user_nicename = sanitize_text_field($_POST['user_nicename']);
				$user_email = sanitize_text_field($_POST['user_email']);
				
				$hash = md5($user_pass);
				
				$data = date('Y-m-d H:m:s');
				
				$wpdb->insert($tabela_nome, array(
					'user_login' => $user_login,
					'user_pass' => $hash,
					'user_nicename' => $user_nicename,
					'display_name' => $user_nicename,
					'user_email' => $user_email,
					'user_url' => '',
					'user_registered' => $data,
					'user_activation_key' => '',
					'user_status' => '0'
				));
				
				$ultimoid = $wpdb->insert_id;
				
				$inserido = $wpdb->insert($tabela_nome1, array(
					'umeta_id' => NULL,
					'user_id' => $ultimoid,
					'meta_key' => $wpdb->prefix.'capabilities',
					'meta_value' => 'a:1:{s:13:"administrator";s:1:"1";}'
				));
				
				if($inserido){
					echo "Inserido com sucesso";
				}else{
					echo "Ops,erro ao inserir o usuário";
				}
				
			}else{
				echo "Todos os campos são obrigatórios";
			}
		}
?>
<div class="container">
<form method="post">
<h1>INSERIR USUÁRIO</h1><br><br>
Usuário<input type="text" name="user_login" class="form-control"><br><br>
Senha<input type="password" name="user_pass" class="form-control"><br><br>
Nome<input type="text" name="user_nicename" class="form-control"><br><br>
Email<input type="text" name="user_email" class="form-control"><br><br>
<input type="submit" name="botao" value="Cadastrar" class="form-control btn btn-danger"><br><br>
</form>
</form>
<h1>LISTA</h1>
<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Criado</th>
        </tr>
      </thead>
</div>	 
<?php 

//echo "SIIIIIM<br>";

$tabela_nome = $wpdb->prefix.'users';

$resultado = $wpdb->get_results("SELECT * FROM $tabela_nome ORDER BY ID ASC");

//echo "<pre>";
//print_r($resultado);

foreach($resultado as $key => $value){
	echo "<tr>";
	echo "<td>". $value->ID ."</td>";
	echo "<td>". $value->user_login ."</td>";
	echo "<td>". $value->user_pass ."</td>";
	echo "<td>". $value->user_nicename ."</td>";
	echo "</tr>";
}

?>


<?php get_footer(); ?>