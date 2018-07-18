<?php
class View {
    private $model;
    private $vrednost;
    private $data;

    public function __construct($model) {
        $this->model = $model;
    } 
    public function show(){
        if(isset($_POST['id'])){
            $this->vrednost = $_POST['id'];
        } else {
            $this->vrednost =0;
        }
        $this->data = $this->model->uzmi($this->vrednost);
        $html = "<form style='text-align:center;' action='' method='POST'>
        Id <br><input type='number' name='id' value='".$this->data[0]."'><br>
        Ime <br><input type='text'  value='".$this->data[1]."'><br>
        Prezime <br> <input type='text' value='".$this->data[2]."' ><br>
        Vreme <br> <input type='text' value='".$this->data[3]."' ><br><br>
        <input type='submit' value='Send The Id' >
        </form>";
        return $html;
    }
}



