namespace Override;

function count(array $arr)
{
    return 10;
}

echo 'fake count: ',  count([1,2]);
echo 'real count: ', \count([1,2]);