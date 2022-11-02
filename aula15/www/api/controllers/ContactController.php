<?php
class ContactController
{

    var $ContactModel;

    public function __construct()
    {
        require_once('models/ContactModel.php');
        $this->ContactModel = new ContactModel();
    }

    public function listContacts()
    {
        $result = $this->ContactModel->listContacts();
        $arrayContacts = array();

        //Populando o array de contatos com os contatos do banco de dados
        while ($line = $result->fetch_assoc()) {
            array_push($arrayContacts, $line);
        }

        //Preparando o response
        header('Content-Type: application/json');
        echo json_encode($arrayContacts);
    }

    public function consultContact($id_contact)
    {
        $result = $this->ContactModel->consultContact($id_contact);
        if ($arrayContact = $result->fetch_assoc()) {
            header('Content-type: application/json');
            echo json_encode($arrayContact);
        } else {
            header('Content-type: application/json');
            echo ('{
            "error":"1",
            "message":"Contato não encontrado"
          }');
        }
    }

    public function insertContact()
    {
        //Processando os dados recebidos
        $contact = json_decode(file_get_contents("php://input"));
        $arrayContact = (array) $contact;
        $result = $this->ContactModel->insertContact($arrayContact);
        //Preparando o retorno para o client
        header('Content-Type: application/json');
        echo ('
            {
                "success": "1",
                "message": "Contato inserido";
            }'
        );
    }
}
