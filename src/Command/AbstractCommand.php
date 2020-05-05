<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

abstract class AbstractCommand implements CommandInterface
{
    /**
     * @var mixed[]
     */
    private $options = [];

    protected function hasOption(
        string $name
    ): bool {
        return array_key_exists($name, $this->options);
    }

    /**
     * @return mixed|null
     */
    protected function getOption(
        string $name
    ) {
        return $this->hasOption($name) ? $this->options[$name] : null;
    }

    /**
     * @param mixed|null $value
     */
    protected function setOption(
        string $name,
        $value = null
    ): void {
        $this->options[$name] = $value;
    }

    protected function unsetOption(
        string $name
    ): void {
        unset($this->options[$name]);
    }

    /**
     * @return array|mixed[]
     */
    protected function getFlattenOptions(): array
    {
        $result = [];

        foreach ($this->options as $key => $value) {
            $result[] = (string) $key;

            if ($value !== null) {
                $result[] = $value;
            }
        }

        return $result;
    }
}
