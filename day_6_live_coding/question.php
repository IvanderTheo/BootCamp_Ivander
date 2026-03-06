<?php

    declare(strict_types=1); // mengahsilkan error jika terjadi kesalahan tipe data

    function heading(string $text): void
    {
        echo PHP_EOL . "==== ${text} ====" . PHP_EOL;
    }

    function rupiah(float $amount): string
    {
        return "Rp" . number_format($amount, 0, ",", "."); 
    }

    function printLine(string $label, mixed $value): void 
    {
        if(is_float($value)){
            $value = rtrim(rtrim(number_format($value, 2, ".", ""), '0'), '.');
        }

        echo "{$label}: {$value}" . PHP_EOL;
    }

    heading('Soal 1');

    function validateScore(float $score): bool
    {
        return $score >= 0 && $score <= 100;
    }

    function calculateFinalScore(float $assignment, float $midterm, float $finalExam): float 
    {
        foreach([$assignment, $midterm, $finalExam] as $score){
            if(!validateScore($score)) {
                throw new InvalidArgumentException("Nilai harus antara 0 dan 100");    
            }
        }
        return ($assignment * 0.30) + ($midterm * 0.30) + ($finalExam * 0.40);
    }

    function getGrade(float $finalScore): string
    {
        return match(true) {
            $finalScore >= 85 => "A",
            $finalScore >= 70 => "B",
            $finalScore >= 60 => "C",
            $finalScore >= 50 => "D",
            default => "E",
        };
    }

    function getStudentStatus(string $grade): string
    {
        return in_array($grade, ["A", "B", "C"], true) ? "LULUS" : "TIDAK LULUS";
    }

    $assignmentScore = 80;
    $midtermScore = 90;
    $finalExamScore = 85;
    $finalScore = calculateFinalScore($assignmentScore, $midtermScore, $finalExamScore);
    $grade = getGrade($finalScore);

    printLine("Nilai Tugas", $assignmentScore);
    printLine("Nilai UTS", $midtermScore);
    printLine("Nilai UAS", $finalExamScore);
    printLine("Nilai Akhir", $finalScore);
    printLine("Grade", $grade);
    printLine("Status", getStudentStatus($grade));

?>