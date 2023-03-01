import { usePage } from '@inertiajs/react';

const DashboardPage = () => {
  const { props: { title } } = usePage<{ title: string }>();

  return (
    <div>
      <h1>{title}</h1>
    </div>
  );
};

export default DashboardPage;
