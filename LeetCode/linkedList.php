<?php
    class Node {
        public $data; 
        public $next; 


        public function __construct($data)
        {
            $this->data = $data;
            $this->next = null;
        }
    }

    class LinkedList{
        public $head; 

        public function __construct()
        {
            $this->head = null;
        }

        public function insert($data)
        {
            $newNode = new Node($data);
            
            if($this->head === null)
            {
                $this->head = $newNode;
            }else{
                $currentNode = $this->head;

                while($currentNode->next !== null){
                    $currentNode = $currentNode->next;
                }
                $currentNode->next = $newNode;
            }
        }
        public function display() {
            $current = $this->head;
            while ($current !== null) {
                echo $current->data . " ";
                $current = $current->next;
            }
            echo "\n";
        }

        public function reverse(){
            if($this->head === null || $this->head->next === null) {
                return; 
            }

            $prevNode = null;
            $currentNode = $this->head;
            $nextNode = null;

            while($currentNode !== null){
                $nextNode = $currentNode->next;
                $currentNode->next = $prevNode;
                $prevNode = $currentNode;
                $currentNode = $nextNode;
            }
            $this->head = $prevNode;
        }
    }

    $linkedList = new LinkedList;
    $linkedList->insert(10);
    $linkedList->insert(8);

    $linkedList->display();

    $linkedList->reverse();
    $linkedList->display();
?>