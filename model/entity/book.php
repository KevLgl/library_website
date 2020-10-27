<?php
// Classe représetant les livres stockés en base de données
class Book {

    protected $id;
    protected $title;
    protected $author;
    protected $release_date;
    protected $status;
    protected $categories;
    protected $summary;
    protected $owner_id;
    
    public function __construct(array $data = NULL){
        if($data){
            $this->hydrate($data);
        }
    }
    private function hydrate(array $data){
        
            foreach ($data as $key => $value) {
                $method = "set" . ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($value);
                
            }
        }
    }
    // GETTERS & SETTERS 
    //ID
    public function setId(int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    //TITLE
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
    //AUTHOR
    public function setAuthor(string $author){
        $this->author = $author;
    }
    public function getAuthor(){
        return $this->author;
    }
    //RELEASE_DATE
      public function setRelease_date(string $release_date){
        $this->release_date = $release_date;
    }
    public function getRelease_date(){
        return $this->release_date;
    }
    //STATUS
    public function setStatus(string $status){
        $this->status = $status;
    }
    public function getStatus(){
        return $this->status;
    }
    //CATEGORIES
    public function setCategories(string $categories){
        $this->categories = $categories;
    }
    public function getCategories(){
        return $this->categories;
    }
    //SUMMARY
    public function setSummary(string $summary){
        $this->summary = $summary;
    }
    public function getSummary(){
        return $this->summary;
    }
    //SUMMARY
    public function setOwner_id(string $owner_id){
        $this->owner_id = $owner_id;
    }
    public function getOwner_id(){
        return $this->owner_id;
    }



}
