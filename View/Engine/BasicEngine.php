<?php
    namespace Framework\View\Engine;
    use Framework\View\Engine\HasManager;

    class BasicEngine implements Engine
    {
        use HasManager;
        // public function render(string $path, array $data = []): string
        public function render(View $view): string
        {
            $contents = file_get_contents($view->path);
            foreach ($view->data as $key => $value) {
                $contents = str_replace(
                '{'.$key.'}', $value, $contents
                );
            }
            return $contents;
        }
    }