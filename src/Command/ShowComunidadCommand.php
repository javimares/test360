<?php
/**
 * Created by PhpStorm.
 * User: Javi
 * Date: 11/03/2019
 * Time: 2:38
 */

namespace App\Command;


use App\Repository\ComunidadesRepository;
use App\Repository\ProvinciasRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowComunidadCommand extends Command
{
    /**
     * @var ComunidadesRepository
     */
    private $comunidadesRepository;
    /**
     * @var ProvinciasRepository
     */
    private $provinciasRepository;

    /**
     * ShowComunidadCommand constructor.
     * @param ComunidadesRepository $comunidadesRepository
     */
    public function __construct(ComunidadesRepository $comunidadesRepository, ProvinciasRepository $provinciasRepository)
    {
        $this->comunidadesRepository = $comunidadesRepository;
        $this->provinciasRepository = $provinciasRepository;
        parent::__construct('test:show:comunidad');
    }

    /**
     *
     */
    protected function configure()
    {
        $this->addArgument(
            'nombre_comunidad',
            InputArgument::REQUIRED,
            'Nombre de una comunidad autónoma'
        );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Comenzando ejecución');
        $output->writeln('=====================');

        $comunidad = $this->comunidadesRepository->findOneBy(['nombre' => $input->getArgument('nombre_comunidad')]);

        if (!$comunidad) {
            $output->writeln(sprintf('ERROR: No existe la comunidad %s', $input->getArgument('nombre_comunidad')));
            exit;
        }

        $output->writeln($comunidad->getIdComunidad());
        $output->writeln($comunidad->getNombre());
        $output->writeln('No veo la manera de relacionar las comunidades autonomas con las provincias, no tienem relación el la bd por ningun campo o al menos eso es lo que yo veo');
        $output->writeln('Terminado!');
    }
}