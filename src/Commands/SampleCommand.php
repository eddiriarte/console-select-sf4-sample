<?php
namespace App\Commands;

use EddIriarte\Console\Traits\SelectableInputs;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SampleCommand extends Command
{
    use SelectableInputs;

    protected $characters = [
        'Ahsoka Tano',
        'Anakin Skywalker',
        'Boba Fett',
        'Chewbacca',
        'Count Dooku',
        'Darth Maul',
        'Darth Vader',
        'Finn',
        'Han Solo',
        'Jabba the Hutt',
        'Jar Jar Binks',
        'Kylo Ren',
        'Lando Calrissian',
        'Luke Skywalker',
        'Mace Windu',
        'Obi-Wan Kenobi',
        'Padmé Amidala',
        'Sheev Palpatine',
        'Poe Dameron',
        'Princess Leia Organa',
        'Qui-Gon Jinn',
        'Rey',
        'Watto',
        'Yoda',
    ];

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setName('sample')
            ->setDescription('Sample command that uses `console-select`')
            ->setHelp('...please read the docs or create an issue on github');
    }

    /**
     * Undocumented function
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->enableSelectHelper($input, $output);

        $selected1 = $this->select(
            'Select characters that appeared in "Star Wars,  Episode I - The phantom menace"',
            $this->characters
        );
        
        $selected2 = $this->select(
            'What is the name of the ancient Jedi master that lives at the swamps of Dagobah',
            $this->characters,
            false // third argument(bool) that allows multiple selections (default: true)
        );
    }
}
