<?php
    class Tmdb{
        private $url = 'https://api.themoviedb.org/3';
        private $token = "44a8b8d3e5c7803c5edb90c090f5a018";
        
        public function listMoviesTopRated(){
            $ch  = curl_init(); // Iniciar o CURL
            curl_setopt($ch, CURLOPT_URL, $this->url."/movie/top_rated?api_key=".$this->token."&language=pt-BR"); // Aqui
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($ch);
            $response = json_decode($response,true);
            return $response;
        }

        public function listMoviesLatests(){
            $ch  = curl_init(); // Iniciar o CURL
            curl_setopt($ch, CURLOPT_URL, $this->url."/movie/upcoming?api_key=".$this->token."&language=pt-BR"); // Aqui
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($ch);
            $response = json_decode($response,true);
            return $response;
        }

        public function informationMovies($id){
            $ch  = curl_init(); // Iniciar o CURL
            curl_setopt($ch, CURLOPT_URL, $this->url."/movie/".$id."?api_key=".$this->token."&language=pt-BR"); // Aqui
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($ch);
            $response = json_decode($response,true);
            return $response;
        }

        public function videoMovies($id){
            $ch  = curl_init(); // Iniciar o CURL
            curl_setopt($ch, CURLOPT_URL, $this->url."/movie/".$id."/videos?api_key=".$this->token."&language=pt-BR"); // Aqui
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec($ch);
            $response = json_decode($response,true);
            return $response;
        }
    }