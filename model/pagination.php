<?php
Class Pagination extends Model
{
    // affiche la pagination
    public function paginate($table, $page = NULL)
    {
        
        $self = $this->unsetParam();

        $currentPage = $this->getPage($table, $page);
        $nbrPages = $this->nbrMaxPages($table);

        $html['text'] = '<p>Page '. $currentPage . ' sur '. $nbrPages .'</p>';

        $html['link'] = '
        <ul class="pagination">';

        if ($nbrPages > 1) 
        {
            if($currentPage!=1)
            {
               $previous = $currentPage-1;
               $html['link'] .=  '<li class="page-item"><a href="'.$self.'&page='.$previous.'" class="page-link">Précédent</a></li>
               ';
            }
            for($i=1;$i<=$nbrPages;$i++)
            {
                if ($i==$currentPage)
                {
                    $html['link'] .= '<li class="page-item"><a href="'.$self.'&page='.$i.'" style="text-decoration:none;" class="page-link">'.$i.'</a></li>';
                }
                else 
                {
                    $html['link'] .= '<li class="page-item"><a href="'.$self.'&page='.$i.'" class="page-link">'.$i.'</a></li>';
                }
            }
            if($currentPage!=$nbrPages)
            {
                $next=$currentPage+1;
                $html['link'] .= '<li class="page-item"><a href="'.$self.'&page='.$next.'" id="suivant" class="page-link">Suivant</a></li>
                <li class="page-item"><a href="'.$self.'&page='.$nbrPages.'" class="page-link">>></a></li>';
            }
        }
        else
        {
            $html['link'] .= '1 seule page de résultats';
        }
        $html['link'] .= '</ul>
       ';

        return $html;
    }


    public function paginateScores($table, $cat, $page = NULL)
    {
        
        $self = $this->unsetParam();

        $currentPage = 1;
        $page = intval($page);
        if (isset($page)  && is_int($page) && $page > 0)
        {
            $currentPage = $page;
        }
        
        $cnt = $this->connect();
        $nbrLignes = $cnt->query('SELECT * FROM scores WHERE categorieId IN ('. $cat .')')->rowCount();
        $nbrPages = ceil($nbrLignes / self::NBR_DE_LIGNES);


        $info['currentPage'] = $currentPage;
        $info['nbrPages'] = $nbrPages;

        $html['text'] = '<p>Page '. $currentPage . ' sur '. $nbrPages .'</p>';

        $html['link'] = '
        <ul class="pagination">';

        if ($nbrPages > 1) 
        {
            if($currentPage!=1)
            {
               $previous = $currentPage-1;
               $html['link'] .=  '<li class="page-item"><a href="'.$self.'&page='.$previous.'" class="page-link">Précédent</a></li>
               ';
            }
            for($i=1;$i<=$nbrPages;$i++)
            {
                if ($i==$currentPage)
                {
                    $html['link'] .= '<li class="page-item"><a href="'.$self.'&page='.$i.'" style="text-decoration:none;" class="page-link">'.$i.'</a></li>';
                }
                else 
                {
                    $html['link'] .= '<li class="page-item"><a href="'.$self.'&page='.$i.'" class="page-link">'.$i.'</a></li>';
                }
            }
            if($currentPage!=$nbrPages)
            {
                $next=$currentPage+1;
                $html['link'] .= '<li class="page-item"><a href="'.$self.'&page='.$next.'"  id="suivant" class="page-link">Suivant</a></li>
                <li class="page-item"><a href="'.$self.'&page='.$nbrPages.'" class="page-link">>></a></li>';
            }
        }
        else
        {
            $html['link'] .= '1 seule page de résultats';
        }
        $html['link'] .= '</ul>
       ';

        return $html;
    }
}